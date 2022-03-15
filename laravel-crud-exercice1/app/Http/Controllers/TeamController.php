<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(){
        $team = Team::all();
        return view('back.teams.all', compact('team'));
    }

    public function destroy($id){
        $team = Team::find($id);
        $team->delete();
        return redirect()->back()->with('message', 'Element destroyed');
    }

    public function edit($lid){
        $team = Team::find($lid);
        return view('back.teams.edit', compact('team'));
    }

    public function update($id, Request $request) {
        $team = Team::find($id);
        $team->name = $request->name;
        $team->number = $request->number;
        $team->coach = $request->coach;
        $team->role = $request->role;
        $team->updated_at = now();
        $team->save();
        return redirect()->route("back.teams.all")->with('message', 'Element updated');
    }

    public function create(){
        return view("back.teams.create");
    }

    public function store(Request $request){
        $team = new Team;
        $validated = $request->validate([
            'name' => 'required',
            'number' => 'required',
            'coach' => 'required',
            'role' => 'required',
        ]);
        $team->name = $request->name;
        $team->number = $request->number;
        $team->coach = $request->coach;
        $team->role = $request->role;
        $team->updated_at = now();
        $team->save();
        return redirect()->route("back.teams.all")->with('message', 'Element created');
    }
}
