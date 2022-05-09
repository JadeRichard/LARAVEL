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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// About 
Route::resource('/dashboard/abouts', AboutController::class);

// Testimonials
Route::resource('/dashboard/testimonials', TestimonialController::class );

// Services
Route::resource('/dashboard/services', ServiceController::class );

// Banner
Route::get('/dashboard/banners', [BannerController::class, 'index'])->name('banners.index');
Route::get('/dashboard/banners/{id}/read', [BannerController::class, 'read'])->name('banners.read');
Route::get('/dashboard/banners/{id}/edit', [BannerController::class, 'edit'])->name('banners.edit');
Route::post('/dashboard/banners/{id}/update', [BannerController::class, 'update'])->name('banners.update');


// Image
Route::get('/dashboard/images', [ImageController::class, 'index'])->name('images.index');
Route::get('/dashboard/images/{id}/read', [ImageController::class, 'read'])->name('images.read');
Route::get('/dashboard/images/{id}/edit', [ImageController::class, 'edit'])->name('images.edit');
Route::post('/dashboard/images/{id}/update', [ImageController::class, 'update'])->name('images.update');

// User
Route::resource('/dashboard/users', UserController::class );


