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

    public function show(Testimonial $testimonial){
        return view("back.testimonials.show", compact('testimonial'));
    }

    public function edit(Testimonial $testimonial){
        return view('back.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial) {
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

    public function destroy(Testimonial $testimonial){
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
