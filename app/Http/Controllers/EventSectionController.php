<?php

namespace App\Http\Controllers;

use App\Models\EventSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventSectionController extends Controller
{
    public function index()
    {
        $events = EventSection::latest()->paginate(10);
        return view('event_section.index', compact('events'));
    }

    public function create()
    {
        return view('event_section.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'bullet_points' => 'nullable|array',
            'bullet_points.*' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('event_images', 'public');
        }

        $data['bullet_points'] = $data['bullet_points'] ?? [];

        EventSection::create($data);

        return redirect()->route('event-section.index')->with('status', 'Event section created successfully!');
    }

    public function edit($id)
    {
        $event = EventSection::findOrFail($id);
        return view('event_section.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $event = EventSection::findOrFail($id);
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => ($event->image ? 'nullable' : 'required') . '|image|mimes:jpg,jpeg,png|max:2048',
            'bullet_points' => 'nullable|array',
            'bullet_points.*' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            if ($event->image) {
                Storage::disk('public')->delete($event->image);
            }
            $data['image'] = $request->file('image')->store('event_images', 'public');
        }

        $data['bullet_points'] = $data['bullet_points'] ?? [];

        $event->update($data);

        return redirect()->route('event-section.index')->with('status', 'Event section updated successfully!');
    }

    public function destroy($id)
    {
        $event = EventSection::findOrFail($id);

        if ($event->image) {
            Storage::disk('public')->delete($event->image);
        }

        $event->delete();

        return redirect()->route('event-section.index')->with('status', 'Event section deleted.');
    }
}
