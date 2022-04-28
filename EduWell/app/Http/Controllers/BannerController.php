<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('roleadmin');
    }
    
    public function index()
    {
        $banners = Banner::all();
        return view("/back/banners/all",compact("banners"));
    }
    public function read($id)
    {
        $banners = Banner::find($id);
        return view("/back/banners/read",compact("banners"));
    }
    public function edit($id)
    {
        $banner = Banner::find($id);
        return view("/back/banners/edit",compact("banner"));
    }
    public function update($id, Request $request)
    {
        $banner = Banner::find($id);
        $banner->subtitle = $request->subtitle;
        $banner->title = $request->title;
        /* $destination = "img/" . $banner->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $banner->image = $request->file("image")->hashName(); */
        $banner->button = $request->button;
        $banner->updated_at = now();
        $banner->save();
        /* $request->file("image")->storePublicly("images", "public"); */
        return redirect()->route("banners.index")->with('message', "Banner updated");
    }
}
