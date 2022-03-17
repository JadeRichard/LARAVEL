<?php

namespace App\Http\Controllers;

use App\Models\Navlink;
use Illuminate\Http\Request;

class NavlinkController extends Controller
{
    public function index(){
        $navlink = Navlink::all();
        return view('back.navlinks.all', compact('navlink'));
    }

    public function read($lid){
        $navlink = Navlink::find($lid);
        return view("back.navlinks.read", compact('navlink'));
    }

    public function edit($lid){
        $navlink = Navlink::find($lid);
        return view('back.navlinks.edit', compact('navlink'));
    }

    public function update($id, Request $request) {
        $navlink = Navlink::find($id);
        $navlink->icon = $request->icon;
        $navlink->path = $request->path;
        $navlink->text = $request->text;
        $navlink->updated_at = now();
        $navlink->save();
        return redirect()->route("back.navlinks.all")->with('message', 'Element updated');
    }

}
