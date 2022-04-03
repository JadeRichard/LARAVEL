<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view("back.users.all", compact("users"));
    }


    public function create(){
        $profiles = Profile::all();
        return view("back.users.create", compact("profiles"));
        
    }

    public function store(Request $request){
        $user = new User;
        $validated = $request->validate([
            'email' => 'required',
            'nickname' => 'required',
            'profile' => 'required',
        ]);
        $user->email = $request->email;
        $user->nickname = $request->nickname;
        $user->profile = $request->profile;
        $user->updated_at = now();
        $user->save();
        return redirect()->route("back.users.all")->with('message', 'Element created');
    }
}
