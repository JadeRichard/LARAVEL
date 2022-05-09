<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::all();
        return view('/back/images/all', compact('images'));
    }


    public function edit($id)
    {
        $images = Image::find($id);
        return view('/back/images/edit', compact('images'));
    }

    public function update(Request $request, $id)
    {
        $image = Image::find($id);
        $request->validate([
            'image' => 'required',
            'image_title' => 'required',
        ]);
        $image->image = $request->image;
        $image->image_title = $request->image_title;
        $image->updated_at = now();
        File::delete("images/". $image->image);
        $image->image = $request->file("image")->hashName();
        $request->file('image')->storePublicly('images/', 'public');
        $image->save();
        return redirect()->route('images.index')->with('message', 'Element image updated');

    }

    public function show($id)
    {
        $image = Image::find($id);
        return view('/back/images/show', compact('image'));
    }

}
