<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use Illuminate\Http\Request;

class FactController extends Controller
{
    public function index(){
        $fact = Fact::all();
        return view('back.facts.all', compact('fact'));
    }

    public function read($lid){
        $fact = Fact::find($lid);
        return view("back.facts.read", compact('fact'));
    }

    public function edit($lid){
        $fact = Fact::find($lid);
        return view('back.facts.edit', compact('fact'));
    }

    public function update($id, Request $request) {
        $fact = Fact::find($id);
        $fact->icon = $request->icon;
        $fact->number = $request->number;
        $fact->important = $request->important;
        $fact->text = $request->text;
        $fact->updated_at = now();
        $fact->save();
        return redirect()->route("back.facts.all")->with('message', 'Element updated');
    }

    public function destroy($id){
        $fact = Fact::find($id);
        $fact->delete();
        return redirect()->back()->with('message', 'Element destroyed');
    }

    public function create(){
        
        $fact = Fact::all();
        return view("back.facts.create", compact("fact"));
    }

    public function store(Request $request){
        $fact = new Fact;
        $validated = $request->validate([
            'icon' => 'required',
            'number' => 'required',
            'important' => 'required',
            'text' => 'required',
        ]);
        $fact->icon = $request->icon;
        $fact->number = $request->number;
        $fact->important = $request->important;
        $fact->text = $request->text;
        $fact->updated_at = now();
        $fact->save();
        return redirect()->route("back.facts.all")->with('message', 'Element created');
    }

}
