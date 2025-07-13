<?php

namespace App\Http\Controllers;

use App\Models\GeographicalSection;
use Illuminate\Http\Request;

class GeographicalSectionController extends Controller
{
    public function index()
    {
        $sections = GeographicalSection::latest()->paginate(10);
        return view('geographical_section.index', compact('sections'));
    }

    public function create()
    {
        return view('geographical_section.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'bullet_title' => 'nullable|string|max:255',
            'bullet_points_combined' => 'nullable|string'
        ]);

        GeographicalSection::create([
            'title' => $request->title,
            'description' => $request->description,
            'bullet_title' => $request->bullet_title,
            'bullet_points' => $request->bullet_points_combined,
        ]);

        return redirect()->route('geographical-section.index')->with('status', 'Geographical section added!');
    }

    public function edit($id)
    {
        $section = GeographicalSection::findOrFail($id);
        return view('geographical_section.edit', compact('section'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'bullet_title' => 'nullable|string|max:255',
            'bullet_points_combined' => 'nullable|string'
        ]);

        $section = GeographicalSection::findOrFail($id);

        $section->update([
            'title' => $request->title,
            'description' => $request->description,
            'bullet_title' => $request->bullet_title,
            'bullet_points' => $request->bullet_points_combined,
        ]);

        return redirect()->route('geographical-section.index')->with('status', 'Geographical section updated!');
    }

    public function destroy($id)
    {
        $section = GeographicalSection::findOrFail($id);
        $section->delete();

        return redirect()->route('geographical-section.index')->with('status', 'Geographical section deleted!');
    }
}
