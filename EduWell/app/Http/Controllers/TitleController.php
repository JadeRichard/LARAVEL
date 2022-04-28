<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Title;

class TitleController extends Controller
{

    public function __construct()
    {
        $this->middleware('roleadmin');
    }

    public function index()
    {
        $titles = Title::all();
        return view("/back/titles/all",compact("titles"));
    }
    public function read($id)
    {
        $titles = Title::find($id);
        return view("/back/titles/read",compact("titles"));
    }
    public function edit($id)
    {
        $titles = Title::find($id);
        return view("/back/titles/edit",compact("titles"));
    }
    public function update($id, Request $request)
    {
        $titles = Title::find($id);
        $request->validate([
            'link' => 'required',
        ]); 
        $titles->save(); 
        return redirect()->route("titles.index")->with('message', "Title updated");
    }
}
