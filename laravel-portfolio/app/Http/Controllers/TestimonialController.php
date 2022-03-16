<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index(){
        $testimonial = Testimonial::all();
        return view('back.testimonials.all', compact('testimonial'));
    }
}
