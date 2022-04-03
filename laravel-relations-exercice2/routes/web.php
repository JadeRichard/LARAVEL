<?php

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
Route::get('back/usercreate', [UserController::class, "create"])->name("back.users.create");
Route::post('back/userstore', [UserController::class, "store"])->name("back.users.store");