<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){
        $role = Role::all();
        return view('back.roles.all', compact('role'));
    }

    public function show(Role $role){
        return view("back.roles.show", compact('role'));
    }

    public function edit(Role $role){
        return view('back.roles.edit', compact('role'));
    }

    public function update(Request $request, Role $role) {
        $role->name = $request->name;
        $role->user_id = $request->user_id;
        $role->updated_at = now();
        $role->save();
        return redirect()->route("back.roles.all")->with('message', 'Element updated');
    }

    public function destroy(Role $role){
        $rolearr = Role::all();
        if (count($rolearr) > 1) {
            $role->delete();
            return redirect()->back()->with('message', 'Element destroyed');
        } else {      
            return redirect()->back()->with('message', 'Cannot delete all elements');
        }
    }

    public function create(){
        $role = Role::all();
        return view("back.roles.create", compact("role"));
        
    }

    public function store(Request $request){
        $role = new Role;
        $validated = $request->validate([
            'name' => 'required',
            'user_id' => 'required',
        ]);
        $role->name = $request->name;
        $role->user_id = $request->user_id;
        $role->updated_at = now();
        $role->save();
        return redirect()->route("back.roles.all")->with('message', 'Element created');
    }
}
