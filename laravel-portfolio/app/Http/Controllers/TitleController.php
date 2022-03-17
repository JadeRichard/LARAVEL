<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    public function index(){
        $title = Title::all();
        return view('back.titles.all', compact('title'));
    }

    public function read($lid){
        $title = Title::find($lid);
        return view("back.titles.read", compact('title'));
    }

    public function edit($lid){
        $title = Title::find($lid);
        return view('back.titles.edit', compact('title'));
    }

    public function update($id, Request $request) {
        $title = Title::find($id);
        $title->title = $request->title;
        $title->subtitle = $request->subtitle;
        $title->updated_at = now();
        $title->save();
        return redirect()->route("back.titles.all")->with('message', 'Element updated');
    }

}
