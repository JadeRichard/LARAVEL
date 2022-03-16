<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user = User::all();
        return view('back.users.all', compact('user'));
    }

    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('message', 'Element destroyed');
    }

    public function edit($lid){
        $user = User::find($lid);
        return view('back.users.edit', compact('user'));
    }

    public function update($id, Request $request) {
        $user = User::find($id);
        $user->name = $request->name;
        $user->firstname = $request->firstname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->profilepic = $request->profilepic;
        $user->role = $request->role;
        $user->updated_at = now();
        $user->save();
        return redirect()->route("back.users.all")->with('message', 'Element updated');
    }

    public function create(){
        return view("back.users.create");
    }

    public function read($lid){
        $user = User::find($lid);
        return view("back.users.read", compact('user'));
    }

    public function store(Request $request){
        $user = new User;
        $validated = $request->validate([
            'name' => 'required',
            'firstname' => 'required',
            'email' => 'required',
            'password' => 'required',
            'profilepic' => 'required',
            'role' => 'required',
        ]);
        $user->name = $request->name;
        $user->firstname = $request->firstname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->profilepic = $request->profilepic;
        $user->role = $request->role;
        $user->updated_at = now();
        $user->save();
        return redirect()->route("back.users.all")->with('message', 'Element created');
    }


}
