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

    public function show(User $user){
        return view("back.users.show", compact('user'));
    }

    public function edit(User $user){
        return view('back.users.edit', compact('user'));
    }

    public function update(Request $request, User $user) {
        $user->name = $request->name;
        $user->firstname = $request->firstname;
        $user->age = $request->age;
        $user->birthdate = $request->birthdate;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->albumsnumber = $request->albumsnumber;
        $user->updated_at = now();
        $user->save();
        return redirect()->route("back.users.all")->with('message', 'Element updated');
    }

    public function destroy(User $user){
        $userarr = User::all();
        if (count($userarr) > 1) {
            $user->delete();
            return redirect()->back()->with('message', 'Element destroyed');
        } else {      
            return redirect()->back()->with('message', 'Cannot delete all elements');
        }
    }

    public function create(){
        $user = User::all();
        return view("back.users.create", compact("user"));
        
    }

    public function store(Request $request){
        $user = new User;
        $validated = $request->validate([
            'name' => 'required',
            'firstname' => 'required',
            'age' => 'required',
            'birthdate' => 'required',
            'email' => 'required',
            'password' => 'required',
            'albumsnumber' => 'required',
        ]);
        $user->name = $request->name;
        $user->firstname = $request->firstname;
        $user->age = $request->age;
        $user->birthdate = $request->birthdate;
        $user->email = $request->name;
        $user->password = $request->password;
        $user->albumsnumber = $request->albumsnumber;
        $user->updated_at = now();
        $user->save();
        return redirect()->route("back.users.all")->with('message', 'Element created');
    }
}
