<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        $users = new User();
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->updated_at = now();
        $users->save();
        return redirect()->route('users.index')->with('message', 'Element user created');
    
    }

    public function edit($id)
    {
        $users = User::find($id);
        return view('/back/users/edit', compact('users'));
    }

    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->updated_at = now();
        $users->save();
        return redirect()->route('users.index')->with('message', 'Element user updated');

    }

    public function show($id)
    {
        $users = User::find($id);
        return view('/back/users/show', compact('users'));
    }
}
