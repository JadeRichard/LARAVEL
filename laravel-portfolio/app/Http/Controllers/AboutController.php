<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $about = About::all();
        return view('back.abouts.all', compact('about'));
    }

    public function show(About $about){
        
        return view("back.abouts.show", compact('about'));
    }

    public function edit(About $about){
        
        return view('back.abouts.edit', compact('about'));
    }

    public function update(Request $request, About $about) {
        $about->info = $request->info;
        $about->text = $request->text;
        $about->updated_at = now();
        $about->save();
        return redirect()->route("back.abouts.all")->with('message', 'Element updated');
    }



}
