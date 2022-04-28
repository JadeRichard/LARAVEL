<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TestimonialController extends Controller
{
    /* ublic function __construct()
    {
        $this->middleware('rolewebmaster')->only("index");
    } */

    public function create()
    {
        if (! Gate::allows('create-testimonial')) {
            abort(403);
        }
        return view("/back/testimonials/create");
    }



 public function show($id)
    {
        $testimonial = Testimonial::find($id);
        if (! Gate::allows('create-testimonial')) {
            abort(403);
        }
        return view("/back/testimonials/show", compact("testimonial"));
    }



public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        if (! Gate::allows('create-testimonial')) {
            abort(403);
        }
        return view("/back/testimonials/edit", compact("testimonial"));
    }

    public function index()
    {
        $testimonials = Testimonial::all();
        return view("/back/testimonials/all",compact("testimonials"));
    }
    

    public function update(Testimonial $testimonial, Request $request)
    {

        $this->authorize('update', $testimonial);

        $testimonial->description = $request->description;
        $testimonial->name = $request->name;
        $testimonial->role = $request->role;
        $testimonial->updated_at = now();
        $testimonial->save();
        return redirect()->route("testimonials.index")->with('message', "Testimonial updated");
    }

    public function destroy(Testimonial $testimonial){

        $this->authorize('delete', $testimonial);

        $testimonial->delete();
        return redirect()->back()->with('message', 'Testimonial destroyed');
    }


    public function store(Request $request){

        $this->authorize('create', Testimonial::class);
        $user = auth()->user();
        $testimonial = new Testimonial;
        $validated = $request->validate([
            'description' => 'required',
            'name' => 'required',
            'role' => 'required',
        ]);
        $testimonial->description = $request->description;
        $testimonial->name = $request->name;
        $testimonial->role = $request->role;


        if($user->status != "admin"){

            $testimonial->confirmed = false;
        } else if($user->status === "admin"){
            $testimonial->confirmed = true;
        }



        $testimonial->updated_at = now();
        $testimonial->save();
        return redirect()->route("testimonials.index")->with('message', 'Testimonial created');
    }
}
