<?php

namespace App\Http\Controllers;


use App\Models\PhotoGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoGalleryController extends Controller
{
public function index()
    {
        $photos = PhotoGallery::latest()->paginate(10);
        return view('photo_gallery.index', compact('photos'));
    }

    public function create()
    {
        return view('photo_gallery.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data['image'] = $request->file('image')->store('gallery', 'public');
        PhotoGallery::create($data);

        return redirect()->route('photo-gallery.index')->with('status', 'Photo added successfully!');
    }

    public function destroy($id)
    {
        $photo = PhotoGallery::findOrFail($id);
        if ($photo->image) {
            Storage::disk('public')->delete($photo->image);
        }
        $photo->delete();

        return redirect()->route('photo-gallery.index')->with('status', 'Photo deleted.');
    }
}
