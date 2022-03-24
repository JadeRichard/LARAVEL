<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UserController;
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

Route::get('back/users/all', [UserController::class,'index'])->name('back.users.all');
Route::get('back/albums/all', [AlbumController::class,'index'])->name('back.albums.all');
Route::get('back/photos/all', [PhotoController::class,'index'])->name('back.photos.all');

Route::resource('back/users', UserController::class );
Route::resource('back/albums', AlbumController::class );
Route::resource('back/photos', PhotoController::class );