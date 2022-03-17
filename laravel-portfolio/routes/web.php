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

Route::post('back/abouts/{id}/delete', [AboutController::class, "destroy"])->name('back.abouts.destroy');
Route::get('back/abouts/edit/{id}', [AboutController::class, "edit"])->name("back.abouts.edit");
Route::post('back/abouts/update/{id}', [AboutController::class, "update"])->name("back.abouts.update");
Route::get('back/abouts/read/{id}', [AboutController::class, "read"])->name("back.abouts.read");

Route::post('back/facts/{id}/delete', [FactController::class, "destroy"])->name('back.facts.destroy');
Route::get('back/facts/edit/{id}', [FactController::class, "edit"])->name("back.facts.edit");
Route::post('back/facts/update/{id}', [FactController::class, "update"])->name("back.facts.update");
Route::get('back/factcreate', [FactController::class, "create"])->name("back.facts.create");
Route::post('back/factstore', [FactController::class, "store"])->name("back.facts.store");
Route::get('back/facts/read/{id}', [FactController::class, "read"])->name("back.facts.read");

Route::post('back/navlinks/{id}/delete', [NavlinkController::class, "destroy"])->name('back.navlinks.destroy');
Route::get('back/navlinks/edit/{id}', [NavlinkController::class, "edit"])->name("back.navlinks.edit");
Route::post('back/navlinks/update/{id}', [NavlinkController::class, "update"])->name("back.navlinks.update");
Route::get('back/navlinkcreate', [NavlinkController::class, "create"])->name("back.navlinks.create");
Route::post('back/navlinkstore', [NavlinkController::class, "store"])->name("back.navlinks.store");
Route::get('back/navlinks/read/{id}', [NavlinkController::class, "read"])->name("back.navlinks.read");

Route::post('back/portfolios/{id}/delete', [PortfolioController::class, "destroy"])->name('back.portfolios.destroy');
Route::get('back/portfolios/edit/{id}', [PortfolioController::class, "edit"])->name("back.portfolios.edit");
Route::post('back/portfolios/update/{id}', [PortfolioController::class, "update"])->name("back.portfolios.update");
Route::get('back/portfoliocreate', [PortfolioController::class, "create"])->name("back.portfolios.create");
Route::post('back/portfoliostore', [PortfolioController::class, "store"])->name("back.portfolios.store");
Route::get('back/portfolios/read/{id}', [PortfolioController::class, "read"])->name("back.portfolios.read");

Route::post('back/skills/{id}/delete', [SkillController::class, "destroy"])->name('back.skills.destroy');
Route::get('back/skills/edit/{id}', [SkillController::class, "edit"])->name("back.skills.edit");
Route::post('back/skills/update/{id}', [SkillController::class, "update"])->name("back.skills.update");
Route::get('back/skillcreate', [SkillController::class, "create"])->name("back.skills.create");
Route::post('back/skillstore', [SkillController::class, "store"])->name("back.skills.store");
Route::get('back/skills/read/{id}', [SkillController::class, "read"])->name("back.skills.read");

Route::post('back/testimonials/{id}/delete', [TestimonialController::class, "destroy"])->name('back.testimonials.destroy');
Route::get('back/testimonials/edit/{id}', [TestimonialController::class, "edit"])->name("back.testimonials.edit");
Route::post('back/testimonials/update/{id}', [TestimonialController::class, "update"])->name("back.testimonials.update");
Route::get('back/testimonialcreate', [TestimonialController::class, "create"])->name("back.testimonials.create");
Route::post('back/testimonialstore', [TestimonialController::class, "store"])->name("back.testimonials.store");
Route::get('back/testimonials/read/{id}', [TestimonialController::class, "read"])->name("back.testimonials.read");

Route::get('back/titles/edit/{id}', [TitleController::class, "edit"])->name("back.titles.edit");
Route::post('back/titles/update/{id}', [TitleController::class, "update"])->name("back.titles.update");
Route::get('back/titles/read/{id}', [TitleController::class, "read"])->name("back.titles.read");