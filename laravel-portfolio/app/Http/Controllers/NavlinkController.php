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

    public function show(Navlink $navlink){
        return view("back.navlinks.show", compact('navlink'));
    }

    public function edit(Navlink $navlink){
        return view('back.navlinks.edit', compact('navlink'));
    }

    public function update(Request $request, Navlink $navlink) {
        $navlink->icon = $request->icon;
        $navlink->path = $request->path;
        $navlink->text = $request->text;
        $navlink->updated_at = now();
        $navlink->save();
        return redirect()->route("back.navlinks.all")->with('message', 'Element updated');
    }

}
