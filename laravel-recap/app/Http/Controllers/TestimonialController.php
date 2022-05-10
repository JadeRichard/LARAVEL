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
        if (count($testimonials) >= 5) {
            return redirect()->back()->with('message', 'Cannot create more than five elements');
        } else {
            return view('/back/testimonials/create', compact('testimonials'));
        }
       
    }

    public function store(Request $request)
    {
        $testimonials = new Testimonial();
        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'rating' => 'required',
            'designation' => 'required',
            'category' => 'required',
            'description' => 'required',
            'photo' => 'required',
        ]);
        $testimonials->name = $request->name;
        $testimonials->date = $request->date;
        $testimonials->rating = $request->rating;
        $testimonials->designation = $request->designation;
        $testimonials->category = $request->category;
        $testimonials->description = $request->description;
        $testimonials->photo = $request->photo;
        $testimonials->updated_at = now();
        $testimonials->photo = $request->file("photo")->hashName();
        $request->file('photo')->storePublicly('images/', 'public');
        $testimonials->save();
        return redirect()->route('testimonials.index')->with('message', 'Element testimonial created');
    
    }

    public function edit($id)
    {
        $testimonials = Testimonial::find($id);
        return view('/back/testimonials/edit', compact('testimonials'));
    }

    public function update(Request $request, $id)
    {
        $testimonials = Testimonial::find($id);
        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'rating' => 'required',
            'designation' => 'required',
            'category' => 'required',
            'description' => 'required',
            'photo' => 'required',
        ]);
        $testimonials->name = $request->name;
        $testimonials->date = $request->date;
        $testimonials->rating = $request->rating;
        $testimonials->designation = $request->designation;
        $testimonials->category = $request->category;
        $testimonials->description = $request->description;
        $testimonials->photo = $request->photo;
        $testimonials->updated_at = now();
        $testimonials->photo = $request->file("photo")->hashName();
        $request->file('photo')->storePublicly('images/', 'public');
        $testimonials->save();
        return redirect()->route('testimonials.index')->with('message', 'Element testimonial updated');

    }

    public function destroy($id)
    {
        $testimonialarray = Testimonial::all();
        $testimonials = Testimonial::find($id);
        if (count($testimonialarray) > 1) {
            $testimonials->delete();
            return redirect()->back()->with('message', 'Element testimonial destroyed');
        } else {      
            return redirect()->back()->with('message', 'Cannot delete all elements');
        }
    }

    public function show($id)
    {
        $testimonials = Testimonial::find($id);
        return view('/back/testimonials/show', compact('testimonials'));
    }
}
