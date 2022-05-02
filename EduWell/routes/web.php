<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\TitleController;
use App\Models\Banner;
use App\Models\Map;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\User;
use App\Models\Title;

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
    $banners = Banner::all();
    $maps = Map::all();
    $services = Service::all();
    $testimonials = Testimonial::all();
    $users = User::all();
    $titles = Title::all();
    return view('welcome', compact("banners", "maps", "services", "testimonials", "users","titles"));
});

Route::get("/mail", "\App\Http\Controllers\MailController@sendMail")->name("mail");

Route::get('/dashboard', function () {
    $users = User::all();
    return view('dashboard', compact("users"));
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Middleware pour les blades du back
route::middleware(['auth'])->group(function () {
   

// Banners
Route::get('/back/banners', [BannerController::class, 'index'])->name('banners.index');
Route::get('/back/banners/{id}/read', [BannerController::class, 'read'])->name('banners.read');
Route::get('/back/banners/{id}/edit', [BannerController::class, 'edit'])->name('banners.edit');
Route::post('/back/banners/{id}/update', [BannerController::class, 'update'])->name('banners.update');


// Services
Route::resource('/back/services', ServiceController::class );

// Testimonials
Route::resource('/back/testimonials', TestimonialController::class );

// Titles
Route::get('/back/titles', [TitleController::class, 'index'])->name('titles.index');
Route::get('/back/titles/{id}/read', [TitleController::class, 'read'])->name('titles.read');
Route::get('/back/titles/{id}/edit', [TitleController::class, 'edit'])->name('titles.edit');
Route::post('/back/titles/{id}/update', [TitleController::class, 'update'])->name('titles.update');

// Titles
Route::get('/back/maps', [MapController::class, 'index'])->name('maps.index');
Route::get('/back/maps/{id}/read', [MapController::class, 'read'])->name('maps.read');
Route::get('/back/maps/{id}/edit', [MapController::class, 'edit'])->name('maps.edit');
Route::post('/back/maps/{id}/update', [MapController::class, 'update'])->name('maps.update');

});