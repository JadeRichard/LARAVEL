<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\User;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index(){
        $album = Album::all();
        return view('back.albums.all', compact('album'));
    }

    public function show(Album $album){
        return view("back.albums.show", compact('album'));
    }

    public function edit(Album $album){
        return view('back.albums.edit', compact('album'));
    }

    public function update(Request $request, Album $album) {
        $album->name = $request->name;
        $album->description = $request->description;
        $album->author = $request->author;
        $album->photosnumber = $request->photosnumber;
        $album->updated_at = now();
        $album->save();
        return redirect()->route("back.albums.all")->with('message', 'Element updated');
    }

    public function destroy(Album $album){
        $albumarr = Album::all();
        if (count($albumarr) > 1) {
            $album->delete();
            return redirect()->back()->with('message', 'Element destroyed');
        } else {      
            return redirect()->back()->with('message', 'Cannot delete all elements');
        }
    }

    public function create(){
        $album = Album::all();
        $user = User::all();
        return view("back.albums.create", compact("album", "user"));
        
    }

    public function store(Request $request){
        $album = new Album;
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'author' => 'required',
            'photosnumber' => 'required',
        ]);
        $album->name = $request->name;
        $album->description = $request->description;
        $album->author = $request->author;
        $album->photosnumber = $request->photosnumber;
        $album->updated_at = now();
        $album->save();
        return redirect()->route("back.albums.all")->with('message', 'Element created');
    }
}
