<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Image;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        $banner = Banner::first();
        $images = Image::all();
        $services = Service::all();
        $testimonials = Testimonial::all();
        return view('welcome', compact('banner', 'images', 'services', 'testimonials'));
    }

}
