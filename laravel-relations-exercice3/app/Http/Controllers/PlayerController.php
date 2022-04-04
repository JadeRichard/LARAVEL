<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    //
    public function index()
    {
        $players = Player::paginate(10);
        $role = Role::all();
        return view("/back/players/all",compact("players", "role"));
    }
    public function create()
    {
        $roles = Role::all();
        $teams = Team::all();
        return view("/back/players/create", compact('teams', 'roles'));
    }
    public function store(Request $request)
    {
        $team = Team::find($request->team_id);
        $role = Role::find($request->role_id);
        $player = new Player;
        $request->validate([
         'name'=> 'required',
         'firstname'=> 'required',
         'age'=> 'required',
         'telnumber'=> 'required',
         'email'=> 'required',
         'gender'=> 'required',
         'country'=> 'required',
        ]); // store_validated_anchor;
        $player->name = $request->name;
        $player->firstname = $request->firstname;
        $player->age = $request->age;
        $player->telnumber = $request->telnumber;
        $player->email = $request->email;
        $player->gender = $request->gender;
        $player->country = $request->country;
        $player->role_id = $request->role_id; 
        $player->team_id = $request->team_id;
        

        if ($team->players->where("role_id", '=', $request->role_id)->count() >= $team->maxrole) {
            
            return redirect()->route("player.create")->with('error', "Can't add more players in that role. ");
        } else {
            
            $player->save(); // store_anchor
            $team->save(); // store_anchor
            return redirect()->route("player.index")->with('message', "Successful storage !");
        }

        
    }
    public function read($id)
    {
        $player = Player::find($id);
        return view("/back/players/read",compact("player"));
    }
    public function edit($id)
    {
        $teams = Team::all();
        $player = Player::find($id);
        $roles = Role::all();
        return view("/back/players/edit",compact("player", "teams", "roles"));
    }
    public function destroy($id){
        $player = Player::find($id);
        $player->delete();
        return redirect()->back()->with('message', 'Element destroyed!');
    }
    public function update($id, Request $request)
    {
        $team = Team::find($request->team_id);
        $player = Player::find($id);
        $request->validate([
         'name'=> 'required',
         'firstname'=> 'required',
         'age'=> 'required',
         'telnumber'=> 'required',
         'email'=> 'required',
         'gender'=> 'required',
         'country'=> 'required',
        ]); // store_validated_anchor;
        $player->name = $request->name;
        $player->firstname = $request->firstname;
        $player->age = $request->age;
        $player->telnumber = $request->telnumber;
        $player->email = $request->email;
        $player->gender = $request->gender;
        $player->country = $request->country;
        $player->role_id = $request->role_id; 
        $player->team_id = $request->team_id;
        

        if ($team->players->where("role_id", '=', $request->role_id)->count() > $team->maxrole) {
            
            return redirect()->route("player.create")->with('error', "Can't add more players in that role. ");
        } else {
            
            $player->save(); // store_anchor
            $team->save(); // store_anchor
            return redirect()->route("player.index")->with('message', "Successful update !");
        }
    }
}
