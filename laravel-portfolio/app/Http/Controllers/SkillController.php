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

    public function show(Skill $skill){
        return view("back.skills.show", compact('skill'));
    }

    public function edit(Skill $skill){
        return view('back.skills.edit', compact('skill'));
    }

    public function update(Request $request, Skill $skill) {
        $skill->skill = $request->skill;
        $skill->value = $request->value;
        $skill->updated_at = now();
        $skill->save();
        return redirect()->route("back.skills.all")->with('message', 'Element updated');
    }

    public function destroy(Skill $skill){
        $skillarr = Skill::all();
        if (count($skillarr) > 1) {
            $skill->delete();
            return redirect()->back()->with('message', 'Element destroyed');
        } else {      
            return redirect()->back()->with('message', 'Cannot delete all elements');
        }
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
