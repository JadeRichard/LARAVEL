<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Auth\User;
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
    /* $user = User::first();
    dd($user->roles); */
    return view('welcome');
});

Route::get('back/users/all', [UserController::class,'index'])->name('back.users.all');
Route::get('back/roles/all', [RoleController::class,'index'])->name('back.roles.all');

Route::resource('back/users', UserController::class );
Route::resource('back/roles', RoleController::class );