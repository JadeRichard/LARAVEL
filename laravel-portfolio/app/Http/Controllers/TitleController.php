<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    public function index(){
        $title = Title::all();
        return view('back.titles.all', compact('title'));
    }
}
