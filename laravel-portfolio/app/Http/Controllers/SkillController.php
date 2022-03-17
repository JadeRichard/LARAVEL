<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(){
        $skill = Skill::all();
        return view('back.skills.all', compact('skill'));
    }

    public function read($lid){
        $skill = Skill::find($lid);
        return view("back.skills.read", compact('skill'));
    }

    public function edit($lid){
        $skill = Skill::find($lid);
        return view('back.skills.edit', compact('skill'));
    }

    public function update($id, Request $request) {
        $skill = Skill::find($id);
        $skill->skill = $request->skill;
        $skill->value = $request->value;
        $skill->updated_at = now();
        $skill->save();
        return redirect()->route("back.skills.all")->with('message', 'Element updated');
    }

    public function destroy($id){
        $skill = Skill::find($id);
        $skill->delete();
        return redirect()->back()->with('message', 'Element destroyed');
    }

    public function create(){
        return view("back.skills.create");
    }

    public function store(Request $request){
        $skill = new Skill;
        $validated = $request->validate([
            'skill' => 'required',
            'value' => 'required',
        ]);
        $skill->skill = $request->skill;
        $skill->value = $request->value;
        $skill->updated_at = now();
        $skill->save();
        return redirect()->route("back.skills.all")->with('message', 'Element created');
    }

}
