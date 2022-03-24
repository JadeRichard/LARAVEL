<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index(){
        $photo = Photo::all();
        return view('back.photos.all', compact('photo'));
    }

    public function show(Photo $photo){
        return view("back.photos.show", compact('photo'));
    }

    public function edit(Photo $photo){
        return view('back.photos.edit', compact('photo'));
    }

    public function update(Request $request, Photo $photo) {
        $photo->name = $request->name;
        $photo->link = $request->link;
        $photo->albumname = $request->albumname;
        $photo->updated_at = now();
        $photo->save();
        return redirect()->route("back.photos.all")->with('message', 'Element updated');
    }

    public function destroy(Photo $photo){
        $photoarr = Photo::all();
        if (count($photoarr) > 1) {
            $photo->delete();
            return redirect()->back()->with('message', 'Element destroyed');
        } else {      
            return redirect()->back()->with('message', 'Cannot delete all elements');
        }
    }

    public function create(){
        $photo = Photo::all();
        return view("back.photos.create", compact("photo"));
        
    }

    public function store(Request $request){
        $photo = new Photo;
        $validated = $request->validate([
            'name' => 'required',
            'link' => 'required',
            'albumname' => 'required',
        ]);
        $photo->name = $request->name;
        $photo->link = $request->link;
        $photo->albumname = $request->albumname;
        $photo->updated_at = now();
        $photo->save();
        return redirect()->route("back.photos.all")->with('message', 'Element created');
    }
}
