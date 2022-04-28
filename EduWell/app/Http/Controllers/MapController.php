<?php

namespace App\Http\Controllers;

use App\Models\Map;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MapController extends Controller
{
    public function __construct()
    {
        $this->middleware('rolewebmaster');
    }

    public function index()
    {
        $maps = Map::all();
        return view("/back/maps/all",compact("maps"));
    }
    public function read($id)
    {
        $maps = Map::find($id);
        return view("/back/maps/read",compact("maps"));
    }
    public function edit($id)
    {
        $map = Map::find($id);
        return view("/back/maps/edit",compact("map"));
    }
    public function update($id, Request $request)
    {
        $map = Map::find($id);
        $map->link = $request->link;
        $map->updated_at = now();
        $map->save();
        /* $request->file("image")->storePublicly("images", "public"); */
        return redirect()->route("maps.index")->with('message', "Map updated");
    }
}
