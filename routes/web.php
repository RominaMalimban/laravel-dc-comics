<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

// ROTTA HOME:
Route::get('/', [MainController::class, 'home'])
    ->name('home');

// ROTTA SHOW:
Route::get('/person/show/{person}', [MainController::class, 'showPerson'])
    ->name('show.person');