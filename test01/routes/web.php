<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlopController;

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
// Plop
Route::get('/back/plops', [PlopController::class, 'index'])->name('plop.index');
Route::get('/back/plops/create', [PlopController::class, 'create'])->name('plop.create');
Route::post('/back/plops/store', [PlopController::class, 'store'])->name('plop.store');
Route::get('/back/plops/{id}/read', [PlopController::class, 'read'])->name('plop.read');
Route::get('/back/plops/{id}/edit', [PlopController::class, 'edit'])->name('plop.edit');
Route::post('/back/plops/{id}/update', [PlopController::class, 'update'])->name('plop.update');
Route::post('/back/plops/{id}/delete', [PlopController::class, 'destroy'])->name('plop.destroy');
