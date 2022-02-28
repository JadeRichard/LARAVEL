<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $nav = "Welcome";
    return view('welcome', compact("nav"));
});

Route::get('/{navigation}', function ($navigation) {

    if($navigation =="about"){
        $nav = "About";
        return view('pages.about', compact("nav"));
    } else if($navigation =="services"){
        $nav = "Services";
        return view('pages.services', compact("nav"));
    } else {
        $nav = "Welcome";
        return view('welcome', compact("nav"));
    }
});

