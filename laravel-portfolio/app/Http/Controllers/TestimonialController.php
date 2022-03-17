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

    public function read($lid){
        $testimonial = Testimonial::find($lid);
        return view("back.testimonials.read", compact('testimonial'));
    }

    public function edit($lid){
        $testimonial = Testimonial::find($lid);
        return view('back.testimonials.edit', compact('testimonial'));
    }

    public function update($id, Request $request) {
        $testimonial = Testimonial::find($id);
        $testimonial->text = $request->text;
        $testimonial->icon = $request->icon;
        $testimonial->name = $request->name;
        $testimonial->role = $request->role;
        $testimonial->updated_at = now();
        $testimonial->save();
        return redirect()->route("back.testimonials.all")->with('message', 'Element updated');
    }

    public function destroy($id){
        $testimonial = Testimonial::find($id);
        $testimonial->delete();
        return redirect()->back()->with('message', 'Element destroyed');
    }

    public function create(){
        return view("back.testimonials.create");
    }

    public function store(Request $request){
        $testimonial = new Testimonial;
        $validated = $request->validate([
            'text' => 'required',
            'icon' => 'required',
            'name' => 'required',
            'role' => 'required',
        ]);
        $testimonial->text = $request->text;
        $testimonial->icon = $request->icon;
        $testimonial->name = $request->name;
        $testimonial->role = $request->role;
        $testimonial->updated_at = now();
        $testimonial->save();
        return redirect()->route("back.testimonials.all")->with('message', 'Element created');
    }

}
