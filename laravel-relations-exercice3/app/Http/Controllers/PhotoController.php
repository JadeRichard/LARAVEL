<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Role;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    //
    public function index()
    {
        $photos = Photo::all();
        $role = Role::all();
        return view("/back/photos/all",compact("photos", "role"));
    }
    public function create()
    {
        
        $teams = Photo::all();
        return view("/back/photos/create", compact('teams', 'roles'));
    }
    public function store(Request $request)
    {
        $team = Photo::find($request->team_id);
        $photo = new Photo;
        $request->validate([
         'img'=> 'required',
         'firstname'=> 'required',
         'age'=> 'required',
         'telnumber'=> 'required',
         'email'=> 'required',
         'gender'=> 'required',
         'country'=> 'required',
        ]); // store_validated_anchor;
        $photo->img = $request->img;
        $photo->player_id = $request->player_id; 
    }
    public function read($id)
    {
        $photo = Photo::find($id);
        return view("/back/photos/read",compact("photo"));
    }
    public function edit($id)
    {
        $teams = Photo::all();
        $photo = photo::find($id);
        $roles = Role::all();
        return view("/back/photos/edit",compact("photo", "teams", "roles"));
    }
    public function destroy($id){
        $photo = photo::find($id);
        $photo->delete();
        return redirect()->back()->with('message', 'Element destroyed!');
    }
    public function update($id, Request $request)
    {
        $team = Photo::find($request->team_id);
        $photo = photo::find($id);
        $request->validate([
         'name'=> 'required',
         'firstname'=> 'required',
         'age'=> 'required',
         'telnumber'=> 'required',
         'email'=> 'required',
         'gender'=> 'required',
         'country'=> 'required',
        ]); // store_validated_anchor;
        $photo->name = $request->name;
        $photo->firstname = $request->firstname;
        $photo->age = $request->age;
        $photo->telnumber = $request->telnumber;
        $photo->email = $request->email;
        $photo->gender = $request->gender;
        $photo->country = $request->country;
        $photo->role_id = $request->role_id; 
        $photo->team_id = $request->team_id;
        

        if ($team->photos->where("role_id", '=', $request->role_id)->count() > $team->maxrole) {
            
            return redirect()->route("photo.create")->with('error', "Can't add more photos in that role. ");
        } else {
            
            $photo->save(); // store_anchor
            $team->save(); // store_anchor
            return redirect()->route("photo.index")->with('message', "Successful update !");
        }
    }
}
