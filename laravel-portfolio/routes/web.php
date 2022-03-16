<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\FactController;
use App\Http\Controllers\NavlinkController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TitleController;
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

Route::get('/backoffice', function () {
    return view('back.backoffice');
});

Route::get('back/abouts/all', [AboutController::class,'index'])->name('back.abouts.all');
Route::get('back/facts/all', [FactController::class,'index'])->name('back.facts.all');
Route::get('back/navlinks/all', [NavlinkController::class,'index'])->name('back.navlinks.all');
Route::get('back/portfolios/all', [PortfolioController::class,'index'])->name('back.portfolios.all');
Route::get('back/skills/all', [SkillController::class,'index'])->name('back.skills.all');
Route::get('back/testimonials/all', [TestimonialController::class,'index'])->name('back.testimonials.all');
Route::get('back/titles/all', [TitleController::class,'index'])->name('back.titles.all');
