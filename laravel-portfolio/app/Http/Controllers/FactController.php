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

    public function show(Fact $fact){
        return view("back.facts.show", compact('fact'));
    }

    public function edit(Fact $fact){
        return view('back.facts.edit', compact('fact'));
    }

    public function update(Request $request, Fact $fact) {
        $fact->icon = $request->icon;
        $fact->number = $request->number;
        $fact->important = $request->important;
        $fact->text = $request->text;
        $fact->updated_at = now();
        $fact->save();
        return redirect()->route("back.facts.all")->with('message', 'Element updated');
    }

    public function destroy(Fact $fact){
       
        $factarr = Fact::all();
        if (count($factarr) > 1) {
            $fact->delete();
            return redirect()->back()->with('message', 'Element destroyed');
        } else {      
            return redirect()->back()->with('message', 'Cannot delete all elements');
        }
    }

    public function create(){
        
        $fact = Fact::all();

        if (count($fact) >= 4) {
            return redirect()->back()->with('message', 'Cannot create more than four elements');
        } else {
            return view("back.facts.create", compact("fact"));
        }
        
        
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
