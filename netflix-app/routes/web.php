<?php

use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SeasonController;
use App\Http\Controllers\SerieController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('movies', MovieController::class);
Route::resource('series', SerieController::class);
Route::resource('series.seasons', SeasonController::class)->scoped(['season' => 'serie']);
Route::resource('series.seasons.episodes', EpisodeController::class)->scoped(['episode' => 'season']);
