<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view('banner.index', compact('banners'));
    }


    public function edit($id)
    {
        $banners = Banner::find($id);
        return view('banner.edit', compact('banners'));
    }

    public function update(Request $request, $id)
    {
        $banner = Banner::find($id);
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'button_1_text' => 'required',
            'button_1_link' => 'required',
            'button_1_icon' => 'required',
            'button_2_text' => 'required',
            'button_2_link' => 'required',
            'button_2_icon' => 'required',
        ]);
        $banner->title = $request->title;
        $banner->description = $request->description;
        $banner->button_1_text = $request->button_1_text;
        $banner->button_1_link = $request->button_1_link;
        $banner->button_1_icon = $request->button_1_icon;
        $banner->button_2_text = $request->button_2_text;
        $banner->button_2_link = $request->button_2_link;
        $banner->button_2_icon = $request->button_2_icon;
        $banner->updated_at = now();
        $banner->save();
        return redirect()->route('banner.index')->with('message', 'Element banner updated');

    }

}
