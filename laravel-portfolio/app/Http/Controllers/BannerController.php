<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index(){
        $banner = Banner::all();
        return view('back.banner.all', compact('banner'));
    }

    public function read($lid){
        $banner = Banner::find($lid);
        return view("back.banner.read", compact('banner'));
    }

    public function edit($lid){
        $banner = Banner::find($lid);
        return view('back.banner.edit', compact('banner'));
    }

    public function update($id, Request $request) {
        $banner = Banner::find($id);
        $banner->name = $request->name;
        $banner->description = $request->description;
        $banner->updated_at = now();
        $banner->save();
        $request->file("image")->storePublicly("img", "public");
        return redirect()->route("back.banner.all")->with('message', 'Element updated');
    }

}
