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

    public function show(Banner $banner){
        return view("back.banner.show", compact('banner'));
    }

    public function edit(Banner $banner){
        return view('back.banner.edit', compact('banner'));
    }

    public function update(Request $request, Banner $banner) {
        $banner->name = $request->name;
        $banner->description = $request->description;
        $banner->updated_at = now();
        $banner->save();
        $request->file("image")->storePublicly("img", "public");
        return redirect()->route("back.banner.all")->with('message', 'Element updated');
    }

}
