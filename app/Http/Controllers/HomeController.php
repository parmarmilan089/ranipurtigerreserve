<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use App\Models\AttractionSection;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\EventSection;
use App\Models\GeographicalSection;
use App\Models\InfoSection;
use App\Models\PhotoGallery;


class HomeController extends Controller
{
    public function home(){
        $banners = Banner::all(); // ✅ Use paginate
        $infosection = InfoSection::where('status',1)->limit(3)->get(); // ✅ Use paginate
        $about = AboutSection::first(); // get single record
        $attractions = AttractionSection::where('status',1)->limit(3)->get(); // ✅ Use paginate
        $events = EventSection::limit(3)->get();
        $photogallerys = PhotoGallery::all();
        $geographicals = GeographicalSection::all();
        return view('home',compact('banners','infosection','about','attractions','events','photogallerys','geographicals'));
    }

    public function contact(){
        return view('contact');
    }
}
