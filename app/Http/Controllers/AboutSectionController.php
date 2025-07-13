<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutSectionController extends Controller
{
    public function form()
    {
        $about = AboutSection::first(); // get single record
        return view('about_section.form', compact('about'));
    }

    public function storeOrUpdate(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $about = AboutSection::first();

        if ($request->hasFile('image')) {
            if ($about && $about->image) {
                Storage::disk('public')->delete($about->image);
            }
            $data['image'] = $request->file('image')->store('about_images', 'public');
        }

        if ($about) {
            $about->update($data);
            $message = 'About section updated successfully.';
        } else {
            AboutSection::create($data);
            $message = 'About section created successfully.';
        }

        return redirect()->route('about.form')->with('status', $message);
    }
}
