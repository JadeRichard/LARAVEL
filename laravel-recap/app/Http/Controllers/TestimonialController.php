<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('testimonial.index', compact('testimonials'));
    }

    public function create()
    {
        $testimonials = Testimonial::all();
        return view('testimonial.create', compact('testimonials'));
    }

    public function store(Request $request)
    {
        $testimonial = new Testimonial();
        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'rating' => 'required',
            'designation' => 'required',
            'category' => 'required',
            'description' => 'required',
            'photo' => 'required',
        ]);
        $testimonial->name = $request->name;
        $testimonial->date = $request->date;
        $testimonial->rating = $request->rating;
        $testimonial->designation = $request->designation;
        $testimonial->category = $request->category;
        $testimonial->description = $request->description;
        $testimonial->photo = $request->photo;
        $testimonial->updated_at = now();
        $testimonial->save();
        return redirect()->route('testimonial.index')->with('message', 'Element testimonial created');
    
    }

    public function edit($id)
    {
        $testimonials = Testimonial::find($id);
        return view('testimonial.edit', compact('testimonials'));
    }

    public function update(Request $request, $id)
    {
        $testimonial = Testimonial::find($id);
        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'rating' => 'required',
            'designation' => 'required',
            'category' => 'required',
            'description' => 'required',
            'photo' => 'required',
        ]);
        $testimonial->name = $request->name;
        $testimonial->date = $request->date;
        $testimonial->rating = $request->rating;
        $testimonial->designation = $request->designation;
        $testimonial->category = $request->category;
        $testimonial->description = $request->description;
        $testimonial->photo = $request->photo;
        $testimonial->updated_at = now();
        $testimonial->save();
        return redirect()->route('testimonial.index')->with('message', 'Element testimonial updated');

    }

    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->delete();
        return redirect()->route('testimonial.index')->with('message', 'Element testimonial deleted');
    }
}
