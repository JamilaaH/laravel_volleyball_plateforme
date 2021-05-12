<?php

use App\Http\Controllers\EquipeController;
use App\Models\Equipe;
use App\Models\Joueur;
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
    $joueurs= Joueur::all();
    return view('home',compact('joueurs'));
})->name('home');

Route::get('/admin', function () {
    $equipes= Equipe::all();
    return view('backoffice.main',compact('equipes'));
})->name('admin');

Route::resource('/admin/equipe', EquipeController::class);