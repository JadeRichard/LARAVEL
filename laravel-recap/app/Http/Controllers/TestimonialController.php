<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('/back/testimonials/all', compact('testimonials'));
    }

    public function create()
    {
        $testimonials = Testimonial::all();
        return view('/back/testimonials/create', compact('testimonials'));
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
        return redirect()->route('testimonials.index')->with('message', 'Element testimonial created');
    
    }

    public function edit($id)
    {
        $testimonials = Testimonial::find($id);
        return view('/back/testimonials/edit', compact('testimonials'));
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
        File::delete("images/". $testimonial->photo);
        $testimonial->photo = $request->file("photo")->hashName();
        $request->file('photo')->storePublicly('images/', 'public');
        $testimonial->save();

        $testimonial->photo = $request->photo;
        $testimonial->updated_at = now();
        $testimonial->save();
        return redirect()->route('testimonials.index')->with('message', 'Element testimonial updated');

    }

    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->delete();
        return redirect()->back()->with('message', 'Element testimonial deleted');
    }

    public function show($id)
    {
        $testimonial = Testimonial::find($id);
        return view('/back/testimonials/show', compact('testimonial'));
    }
}
