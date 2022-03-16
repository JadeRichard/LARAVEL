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
}
