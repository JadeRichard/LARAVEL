<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    public function index(){
        $image = Image::all();
        return view('back.images.all', compact('image'));
    }

    public function read($lid){
        $image = Image::find($lid);
        return view("back.images.read", compact('image'));
    }

    public function edit($lid){
        $image = Image::find($lid);
        return view('back.images.edit', compact('image'));
    }

    public function update($id, Request $request) {
        $image = Image::find($id);
        $image->source = $request->file("source")->hashName();
        $destination = "img/" . $image->source;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $image->updated_at = now();
        $image->save();
        $request->file("source")->storePublicly("img", "public");
        return redirect()->route("back.images.all")->with('message', 'Element updated');
    }

}
