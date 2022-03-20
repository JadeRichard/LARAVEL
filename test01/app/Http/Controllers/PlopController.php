<?php

namespace App\Http\Controllers;

use App\Models\Plop;
use Illuminate\Http\Request;

class PlopController extends Controller
{
    //
    public function index()
    {
        $plops = Plop::all();
        return view("/back/plops/all",compact("plops"));
    }
    public function create()
    {
        return view("/back/plops/create");
    }
    public function store(Request $request)
    {
        $plop = new Plop;
        $request->validate([
         'nom'=> 'required',
         'prenom'=> 'required',
         'age'=> 'required',
         'plop'=> 'required',
        ]); // store_validated_anchor;
        $plop->nom = $request->nom;
        $plop->prenom = $request->prenom;
        $plop->age = $request->age;
        $plop->plop = $request->plop;
        $plop->save(); // store_anchor
        return redirect()->route("plop.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $plop = Plop::find($id);
        return view("/back/plops/read",compact("plop"));
    }
    public function edit($id)
    {
        $plop = Plop::find($id);
        return view("/back/plops/edit",compact("plop"));
    }
    public function update($id, Request $request)
    {
        $plop = Plop::find($id);
        $request->validate([
         'nom'=> 'required',
         'prenom'=> 'required',
         'age'=> 'required',
         'plop'=> 'required',
        ]); // update_validated_anchor;
        $plop->nom = $request->nom;
        $plop->prenom = $request->prenom;
        $plop->age = $request->age;
        $plop->plop = $request->plop;
        $plop->save(); // update_anchor
        return redirect()->route("plop.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $plop = Plop::find($id);
        $plop->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
