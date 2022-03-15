<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\TeamController;
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
Route::post('back/users/{id}/delete', [UserController::class, "destroy"])->name('back.users.destroy');
Route::get('back/users/edit/{id}', [UserController::class, "edit"])->name("back.users.edit");
Route::post('back/users/update/{id}', [UserController::class, "update"])->name("back.users.update");
Route::get('back/usercreate', [UserController::class, "create"])->name("back.users.create");
Route::post('back/userstore', [UserController::class, "store"])->name("back.users.store");

Route::get('back/cars/all', [CarController::class,'index'])->name('back.cars.all');
Route::post('back/cars/{id}/delete', [CarController::class, "destroy"])->name('back.cars.destroy');
Route::get('back/cars/edit/{id}', [CarController::class, "edit"])->name("back.cars.edit");
Route::post('back/cars/update/{id}', [CarController::class, "update"])->name("back.cars.update");
Route::get('back/carcreate', [CarController::class, "create"])->name("back.cars.create");
Route::post('back/carstore', [CarController::class, "store"])->name("back.cars.store");

Route::get('back/teams/all', [TeamController::class,'index'])->name('back.teams.all');
Route::post('back/teams/{id}/delete', [TeamController::class, "destroy"])->name('back.teams.destroy');
Route::get('back/teams/edit/{id}', [TeamController::class, "edit"])->name("back.teams.edit");
Route::post('back/teams/update/{id}', [TeamController::class, "update"])->name("back.teams.update");
Route::get('back/teamcreate', [TeamController::class, "create"])->name("back.teams.create");
Route::post('back/teamstore', [TeamController::class, "store"])->name("back.teams.store");

Route::get('back/articles/all', [ArticleController::class,'index'])->name('back.articles.all');
Route::post('back/articles/{id}/delete', [ArticleController::class, "destroy"])->name('back.articles.destroy');
Route::get('back/articles/edit/{id}', [ArticleController::class, "edit"])->name("back.articles.edit");
Route::post('back/articles/update/{id}', [ArticleController::class, "update"])->name("back.articles.update");
Route::get('back/articlecreate', [ArticleController::class, "create"])->name("back.articles.create");
Route::post('back/articlestore', [ArticleController::class, "store"])->name("back.articles.store");