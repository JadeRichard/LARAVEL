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

    public function show(Title $title){
        return view("back.titles.show", compact('title'));
    }

    public function edit(Title $title){
        return view('back.titles.edit', compact('title'));
    }

    public function update(Request $request, Title $title) {
        $title->title = $request->title;
        $title->subtitle = $request->subtitle;
        $title->updated_at = now();
        $title->save();
        return redirect()->route("back.titles.all")->with('message', 'Element updated');
    }

}
