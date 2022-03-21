<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        $testimonial->icon = $request->file("icon")->hashName();
        $destination = "img/" . $testimonial->icon;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $testimonial->name = $request->name;
        $testimonial->role = $request->role;
        $testimonial->updated_at = now();
        $testimonial->save();
        $request->file("icon")->storePublicly("img", "public");
        return redirect()->route("back.testimonials.all")->with('message', 'Element updated');
    }

    public function destroy($id){
        $testimonial = Testimonial::find($id);
        $testimonialarr = Testimonial::all();
        $destination = "img/" . $testimonial->icon;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        if (count($testimonialarr) > 1) {
            $testimonial->delete();
            return redirect()->back()->with('message', 'Element destroyed');
        } else {      
            return redirect()->back()->with('message', 'Cannot delete all elements');
        }
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
        $testimonial->icon = $request->file("icon")->hashName();
        
        $testimonial->name = $request->name;
        $testimonial->role = $request->role;
        $testimonial->updated_at = now();
        $testimonial->save();
        $request->file("icon")->storePublicly("img", "public");
        return redirect()->route("back.testimonials.all")->with('message', 'Element created');
    }

}
