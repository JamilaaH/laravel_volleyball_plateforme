<?php

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
});

Route::get('/admin', function () {
    return view('backoffice.main');
})->name('admin');
