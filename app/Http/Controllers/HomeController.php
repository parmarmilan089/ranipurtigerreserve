<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;


class HomeController extends Controller
{
    public function home(){
        $banners = Banner::all(); // ✅ Use paginate
        return view('home',compact('banners'));
    }
}
