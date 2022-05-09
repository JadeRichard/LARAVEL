<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('/back/users/all', compact('users'));
    }

    public function create()
    {
        $users = User::all();
        return view('/back/users/create', compact('users'));
    }

    public function store(Request $request)
    {
        $user = new User();
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->updated_at = now();
        $user->save();
        return redirect()->route('users.index')->with('message', 'Element user created');
    
    }

    public function edit($id)
    {
        $users = User::find($id);
        return view('/back/users/edit', compact('users'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->updated_at = now();
        $user->save();
        return redirect()->route('users.index')->with('message', 'Element user updated');

    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('message', 'Element user deleted');
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('/back/users/show', compact('user'));
    }
}
