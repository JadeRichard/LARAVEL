<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use Illuminate\Http\Request;

class FactController extends Controller
{
    public function index(){
        $fact = Fact::all();
        return view('back.facts.all', compact('fact'));
    }
}
