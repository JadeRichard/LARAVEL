<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    //
    public function index()
    {
        $teams = Team::all();
        $role = Role::all();
        return view("/back/teams/all",compact("teams", "role"));
    }
    public function create()
    {
        return view("/back/teams/create");
    }
    public function store(Request $request)
    {
        $team = new Team;
        $request->validate([
         'clubname'=> 'required',
         'city'=> 'required',
         'country'=> 'required',
         'maxplayer'=> 'required',
        ]); // store_validated_anchor;
        $team->clubname = $request->clubname;
        $team->city = $request->city;
        $team->country = $request->country;
        $team->maxrole = $request->maxrole;
        $team->maxplayer = $request->maxplayer;
        
        $team->save(); // store_anchor
        return redirect()->route("team.index")->with('message', "Successful creation !");
    }
    public function read($id)
    {
        $team = Team::find($id);
        return view("/back/teams/read",compact("team"));
    }
    public function edit($id)
    {
        $team = Team::find($id);
        return view("/back/teams/edit",compact("team"));
    }
    public function update($id, Request $request)
    {
        $team = Team::find($id);
        $request->validate([
         'clubname'=> 'required',
         'city'=> 'required',
         'country'=> 'required',
         'maxplayer'=> 'required',
        ]); // update_validated_anchor;
        $team->clubname = $request->clubname;
        $team->city = $request->city;
        $team->country = $request->country;
        $team->maxrole = $request->maxrole;
        $team->maxplayer = $request->maxplayer;
        $team->save(); // update_anchor
        return redirect()->route("team.index")->with('message', "Successful update !");
    }
    public function destroy($id){
        $team = Team::find($id);
        $team->delete();
        return redirect()->back()->with('message', 'Element destroyed!');
    }
}
