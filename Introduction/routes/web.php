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
    return "bjr";
});

Route::get('/articles', function () {
    $prenom = "a";
    $nom = "b";
    dd($prenom . " " . $nom);
    return $prenom . " " . $nom;
});

Route::get('/{utilisateur}', function ($utilisateur) {
    return $utilisateur;
});

Route::get('/{a}/{b}', function ($a, $b) {
    return $a . " " . $b;
});