<?php

use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Models\Player;
use App\Models\Role;
use App\Models\Team;

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
    $players = Player::all();
    $teams = Team::all();
    $noteam = Player::all()->where('team_id', '==', '5')->random(4);
    $rteam = Player::all()->where('team_id', '!=', '5')->random(4);
    $playerF = Player::all()->where('team_id', '!=', '5')->where('gender', '==', 'F')->random(5); 
    $playerM = Player::all()->where('team_id', '!=', '5')->where('gender', '==', 'M')->random(5); 
    $playerSpain = Player::all()->where('team_id', '==', '3')->where('country', '==', 'Spain'); 
    $playerTaiwan = Player::all()->where('team_id', '==', '2')->where('country', '==', 'Taiwan'); 
    return view('welcome', compact("players", "teams", "playerM", "playerF", "noteam", "rteam", "playerSpain", "playerTaiwan"));
});
// team
Route::get('/back/teams', [TeamController::class, 'index'])->name('team.index');
Route::get('/back/teams/create', [TeamController::class, 'create'])->name('team.create');
Route::post('/back/teams/store', [TeamController::class, 'store'])->name('team.store');
Route::get('/back/teams/{id}/read', [TeamController::class, 'read'])->name('team.read');
Route::get('/back/teams/{id}/edit', [TeamController::class, 'edit'])->name('team.edit');
Route::post('/back/teams/{id}/update', [TeamController::class, 'update'])->name('team.update');
Route::post('/back/teams/{id}/destroy', [TeamController::class, "destroy"])->name('team.destroy');


Route::get('/back/players', [PlayerController::class, 'index'])->name('player.index');
Route::get('/back/players/create', [PlayerController::class, 'create'])->name('player.create');
Route::post('/back/players/store', [PlayerController::class, 'store'])->name('player.store');
Route::get('/back/players/{id}/read', [PlayerController::class, 'read'])->name('player.read');
Route::get('/back/players/{id}/edit', [PlayerController::class, 'edit'])->name('player.edit');
Route::post('/back/players/{id}/update', [PlayerController::class, 'update'])->name('player.update');
Route::post('/back/players/{id}/destroy', [PlayerController::class, "destroy"])->name('player.destroy');
