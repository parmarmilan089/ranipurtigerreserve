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
        'bullet_points' => 'nullable|array',
        'bullet_points.*' => 'nullable|string',
    ]);

    GeographicalSection::create([
        'title' => $request->title,
        'description' => $request->description,
        'bullet_title' => $request->bullet_title,
        // Store bullet points as JSON string (recommended)
        'bullet_points' => !empty($request->bullet_points) 
            ? json_encode(array_filter($request->bullet_points)) 
            : null,
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
    $data = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'bullet_title' => 'nullable|string|max:255',
        'bullet_points' => 'nullable|array',
        'bullet_points.*' => 'nullable|string',
    ]);

    $section = GeographicalSection::findOrFail($id);

    // Convert bullet points array to JSON string or null if empty
    $bulletPointsJson = !empty($data['bullet_points']) 
        ? json_encode(array_filter($data['bullet_points'])) 
        : null;

    $section->update([
        'title' => $data['title'],
        'description' => $data['description'] ?? null,
        'bullet_title' => $data['bullet_title'] ?? null,
        'bullet_points' => $bulletPointsJson,
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
