<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::all();
        return view('image.index', compact('images'));
    }


    public function edit($id)
    {
        $images = Image::find($id);
        return view('image.edit', compact('images'));
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
        $image->save();
        return redirect()->route('image.index')->with('message', 'Element image updated');

    }

}
