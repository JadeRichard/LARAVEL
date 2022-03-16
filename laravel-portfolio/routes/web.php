<?php

use App\Models\About;
use App\Models\Fact;
use App\Models\Navlink;
use App\Models\Portfolio;
use App\Models\Skill;
use App\Models\Testimonial;
use App\Models\Title;
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
    $about = About::all();
    $fact = Fact::all();
    $navlink = Navlink::all();
    $portfolio = Portfolio::all();
    $skill = Skill::all();
    $testimonial = Testimonial::all();
    $title = Title::all();
    return view('welcome', compact("about", "fact", "navlink", "portfolio", "skill", "testimonial", "title"));
});
