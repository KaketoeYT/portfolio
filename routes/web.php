<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');

// projects
Route::get('/projects/cargogrid', [ProjectController::class, 'cargoGrid'])->name('projects.cargogrid');
Route::get('/projects/characterselect', [ProjectController::class, 'CharacterSelect'])->name('projects.characterselect');
Route::get('/projects/mtgbrowser', [ProjectController::class, 'MTGBrowser'])->name('projects.mtgbrowser');
Route::get('/projects/apioptimisation', [ProjectController::class, 'APIOptimisation'])->name('projects.apioptimisation');
Route::get('/projects/bandsite', [ProjectController::class, 'bandSite'])->name('projects.bandsite');
Route::get('/projects/portfolio', [ProjectController::class, 'portfolio'])->name('projects.portfolio');
