<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

// ROTTA HOME:
Route::get('/', [MainController::class, 'home'])
    ->name('home');
