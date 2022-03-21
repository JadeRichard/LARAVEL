<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{
    public function index(){
        $portfolio = Portfolio::all();
        return view('back.portfolios.all', compact('portfolio'));
    }

    public function read($lid){
        $portfolio = Portfolio::find($lid);
        return view("back.portfolios.read", compact('portfolio'));
    }

    public function edit($lid){
        $portfolio = Portfolio::find($lid);
        return view('back.portfolios.edit', compact('portfolio'));
    }

    public function update($id, Request $request) {
        $portfolio = Portfolio::find($id);
        $destination = "img/" . $portfolio->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $portfolio->image = $request->file("image")->hashName();
        $portfolio->title = $request->title;
        $portfolio->filter = $request->filter;
        $portfolio->updated_at = now();
        $portfolio->save();
        $request->file("image")->storePublicly("img", "public");
        return redirect()->route("back.portfolios.all")->with('message', 'Element updated');
    }

    public function destroy($id){
        $portfolio = Portfolio::find($id);
        $destination = "img/" . $portfolio->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $portfolio->delete();
        return redirect()->back()->with('message', 'Element destroyed');
    }

    public function create(){
        return view("back.portfolios.create");
    }

    public function store(Request $request){
        $portfolio = new Portfolio;
        $validated = $request->validate([
            'image' => 'required',
            'title' => 'required',
            'filter' => 'required',
        ]);
        $portfolio->image = $request->file("image")->hashName();
        $portfolio->title = $request->title;
        $portfolio->filter = $request->filter;
        $portfolio->updated_at = now();
        $portfolio->save();
        $request->file("image")->storePublicly("img", "public");
        return redirect()->route("back.portfolios.all")->with('message', 'Element created');
    }

}
