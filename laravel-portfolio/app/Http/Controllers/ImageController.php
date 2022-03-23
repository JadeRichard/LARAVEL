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

    public function show(Image $image){
        return view("back.images.show", compact('image'));
    }

    public function edit(Image $image){
        return view('back.images.edit', compact('image'));
    }

    public function update(Request $request, Image $image) {
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
