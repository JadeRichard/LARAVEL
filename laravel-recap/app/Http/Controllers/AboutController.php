<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        return view('/dashboard/about/index', compact('abouts'));
    }

    public function create()
    {
        $abouts = About::all();
        return view('about.create', compact('abouts'));
    }

    public function store(Request $request)
    {
        $about = new About();
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'link' => 'required',
        ]);
        $about->title = $request->title;
        $about->description = $request->description;
        $about->link = $request->link;
        $about->updated_at = now();
        $about->save();
        return redirect()->route('about.index')->with('message', 'Element About created');
    
    }

    public function edit($id)
    {
        $abouts = About::find($id);
        return view('about.edit', compact('abouts'));
    }

    public function update(Request $request, $id)
    {
        $about = About::find($id);
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'link' => 'required',
        ]);
        $about->title = $request->title;
        $about->description = $request->description;
        $about->link = $request->link;
        $about->updated_at = now();
        $about->save();
        return redirect()->route('about.index')->with('message', 'Element About updated');

    }

    public function destroy($id)
    {
        $about = About::find($id);
        $about->delete();
        return redirect()->route('about.index')->with('message', 'Element About deleted');
    }

}