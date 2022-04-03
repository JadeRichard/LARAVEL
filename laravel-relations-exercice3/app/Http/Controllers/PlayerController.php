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
        $players = Player::all();
        $role = Role::all();
        return view("/back/players/all",compact("players", "role"));
    }
    public function create()
    {
        $teams = Team::all();
        return view("/back/players/create", compact('teams'));
    }
    public function store(Request $request)
    {
        $player = new Player;
        $request->validate([
         'name'=> 'required',
         'firstname'=> 'required',
         'age'=> 'required',
         'telnumber'=> 'required',
         'email'=> 'required',
         'gender'=> 'required',
         'country'=> 'required',
         'clubname'=> 'required',
        ]); // store_validated_anchor;
        $player->name = $request->name;
        $player->firstname = $request->firstname;
        $player->age = $request->age;
        $player->telnumber = $request->telnumber;
        $player->email = $request->email;
        $player->gender = $request->gender;
        $player->country = $request->country;
        $player->role_id = $request->role; 
        $player->team_id = $request->clubname;
        
        $player->save(); // store_anchor
        return redirect()->route("player.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $player = Player::find($id);
        return view("/back/players/read",compact("player"));
    }
    public function edit($id)
    {
        $player = Player::find($id);
        return view("/back/players/edit",compact("player"));
    }
    public function destroy($id){
        $player = Player::find($id);
        $player->delete();
        return redirect()->back()->with('message', 'Element destroyed!');
    }
    public function update($id, Request $request)
    {
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
           $player->telephone = $request->telephone;
        $player->save(); // update_anchor
        return redirect()->route("player.index")->with('message', "Successful update !");
    }
}
