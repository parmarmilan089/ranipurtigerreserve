<?php

namespace App\Http\Controllers;

use App\Models\AttractionSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AttractionSectionController extends Controller
{
    public function index()
    {
        $attractions = AttractionSection::orderBy('id', 'DESC')->paginate(10);
        return view('attraction_section.index', compact('attractions'));
    }

    public function create()
    {
        return view('attraction_section.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'button_text' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('attraction_images', 'public');
        }

        AttractionSection::create($data);

        return redirect()->route('attraction-section.index')->with('status', 'Attraction section added successfully!');
    }

    public function edit($id)
    {
        $attraction = AttractionSection::findOrFail($id);
        return view('attraction_section.edit', compact('attraction'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'button_text' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $attraction = AttractionSection::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($attraction->image) {
                Storage::disk('public')->delete($attraction->image);
            }
            $data['image'] = $request->file('image')->store('attraction_images', 'public');
        }

        $attraction->update($data);

        return redirect()->route('attraction-section.index')->with('status', 'Attraction section updated successfully!');
    }

    public function destroy($id)
    {
        $attraction = AttractionSection::findOrFail($id);

        if ($attraction->image) {
            Storage::disk('public')->delete($attraction->image);
        }

        $attraction->delete();

        return redirect()->route('attraction-section.index')->with('status', 'Attraction section deleted.');
    }

    // ✅ Toggle status via route
    public function toggleStatus($id)
    {
        $attraction = AttractionSection::findOrFail($id);
        $attraction->status = !$attraction->status;
        $attraction->save();

        return redirect()->back()->with('status', 'Status updated.');
    }
}
