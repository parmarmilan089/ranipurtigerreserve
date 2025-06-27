<?php

namespace App\Http\Controllers;

use App\Models\InfoSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InfoSectionController extends Controller
{
    public function index()
    {
        $infoSections = InfoSection::latest()->get();
        return view('info_section.index', compact('infoSections'));
    }

    public function create()
    {
        return view('info_section.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string',
            'status' => 'required|boolean',
            'image' => 'required|image|mimes:jpg,jpeg,png,svg',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('info_images', 'public');
        }

        InfoSection::create($data);

        return redirect()->route('info-section.index')->with('status', 'info-created');
    }

    public function edit(InfoSection $infoSection)
    {
        return view('info_section.edit', compact('infoSection'));
    }

    public function update(Request $request, InfoSection $infoSection)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string',
            'status' => 'required|boolean',
            'image' => 'required|image|mimes:jpg,jpeg,png,svg',
        ]);

        if ($request->hasFile('image')) {
            if ($infoSection->image) {
                Storage::disk('public')->delete($infoSection->image);
            }
            $data['image'] = $request->file('image')->store('info_images', 'public');
        }

        $infoSection->update($data);

        return redirect()->route('info-section.index')->with('status', 'info-updated');
    }

    public function destroy(InfoSection $infoSection)
    {
        if ($infoSection->image) {
            Storage::disk('public')->delete($infoSection->image);
        }

        $infoSection->delete();

        return redirect()->route('info-section.index')->with('status', 'info-deleted');
    }
}
