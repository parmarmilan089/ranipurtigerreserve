<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::latest()->paginate(10); // ✅ Use paginate
        return view('banner.index', compact('banners'));
    }

    public function create()
    {
        return view('banner.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'short_description' => 'nullable|string',
            'button_text' => 'nullable|string',
            'banner_image' => 'nullable',
        ]);

        $banner = new Banner($request->only('title', 'short_description', 'button_text'));

        if ($request->hasFile('banner_image')) {
            $imagePath = $request->file('banner_image')->store('banners', 'public');
            $banner->banner_image = $imagePath;
        }

        $banner->save();

        return redirect()->route('banner.index')->with('success', 'Banner Created Successfully!');
    }

    public function edit($id)
    {
        $banner = Banner::findOrFail($id);
        return view('banner.edit', compact('banner'));
    }

    public function update(Request $request, Banner $banner)
    {
        // 1. Validate
        $data = $request->validate([
            'title'             => 'required|string|max:255',
            'short_description' => 'nullable|string',
            'button_text'       => 'nullable|string|max:100',
            'banner_image'      => 'nullable|image|mimes:jpg,jpeg,png,svg',
        ]);

        // 2. Handle new image upload
        if ($request->hasFile('banner_image')) {
            // Delete old image if exists
            if ($banner->banner_image && Storage::disk('public')->exists($banner->banner_image)) {
                Storage::disk('public')->delete($banner->banner_image);
            }

            // Store new file
            $path = $request->file('banner_image')
                ->store('banners', 'public');

            // Extract filename (without path) or keep full path as you prefer
            $data['banner_image'] = 'banners/'.basename($path);
        }

        // 3. Update model
        $banner->update($data);

        // 4. Redirect with flash
        return redirect()
            ->route('banner.index')
            ->with('status', 'banner-updated');
    }
}
