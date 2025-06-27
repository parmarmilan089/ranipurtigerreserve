<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::latest()->get();
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
            'banner_image' => 'nullable|image|max:2048',
        ]);

        $banner = new Banner($request->only('title', 'short_description', 'button_text'));

        if ($request->hasFile('banner_image')) {
            $imagePath = $request->file('banner_image')->store('banners', 'public');
            $banner->banner_image = $imagePath;
        }

        $banner->save();

        return redirect()->route('banner.index')->with('success', 'Banner Created Successfully!');
    }
}
