<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use Illuminate\Http\Request;

class IconController extends Controller
{
    public function index(){
        $icon = Icon::all();
        return view('back.icons.all', compact('icon'));
    }

    public function show(Icon $icon){
        return view("back.icons.show", compact('icon'));
    }

    public function edit(Icon $icon){
        return view('back.icons.edit', compact('icon'));
    }

    public function update(Request $request, Icon $icon) {
        $icon->source = $request->source;
        $icon->link = $request->link;
        $icon->updated_at = now();
        $icon->save();
        return redirect()->route("back.icons.all")->with('message', 'Element updated');
    }

    public function destroy(Icon $icon){
        $icon->delete();
        return redirect()->back()->with('message', 'Element destroyed');
    }

    public function create(){
        return view("back.icons.create");
    }

    public function store(Request $request){
        $icon = new Icon;
        $validated = $request->validate([
            'source' => 'required',
            'link' => 'required',
        ]);
        $icon->source = $request->source;
        $icon->link = $request->link;
        $icon->updated_at = now();
        $icon->save();
        return redirect()->route("back.icons.all")->with('message', 'Element created');
    }

}
