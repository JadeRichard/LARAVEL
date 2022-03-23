<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\FactController;
use App\Http\Controllers\IconController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\NavlinkController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TitleController;
use App\Models\About;
use App\Models\Banner;
use App\Models\Fact;
use App\Models\Icon;
use App\Models\Image;
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
    $image = Image::all();
    $icon = Icon::all();
    $banner = Banner::all();
    return view('welcome', compact("about", "fact", "navlink", "portfolio", "skill", "testimonial", "title", "image", "icon", "banner"));
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
Route::get('back/images/all', [ImageController::class,'index'])->name('back.images.all');
Route::get('back/icons/all', [IconController::class,'index'])->name('back.icons.all');
Route::get('back/banner/all', [BannerController::class,'index'])->name('back.banner.all');

Route::resource('back/abouts', AboutController::class );
Route::resource('back/banners', BannerController::class );
Route::resource('back/facts', FactController::class );
Route::resource('back/icons', IconController::class );
Route::resource('back/images', ImageController::class );
Route::resource('back/navlinks', NavlinkController::class );
Route::resource('back/portfolios', PortfolioController::class );
Route::resource('back/skills', SkillController::class );
Route::resource('back/testimonials', TestimonialController::class );
Route::resource('back/titles', TitleController::class );