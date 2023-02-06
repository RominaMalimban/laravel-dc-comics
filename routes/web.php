<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

// ROTTA HOME:
Route::get('/', [MainController::class, 'home'])
    ->name('home');

// ROTTA SHOW:
Route::get('/person/show/{person}', [MainController::class, 'showPerson'])
    ->name('show.person');

// ROTTA DELETE:
Route::get('/person/delete/{person}', [MainController::class, 'deletePerson'])
    ->name('delete.person');

// ROTTA PER FORM:
Route::get('/person/create', [MainController::class, 'createNewPerson'])
    ->name('create.person');

// ROTTA PER RICEZIONE DATI FORM:
Route::post('person/store', [MainController::class, 'personStore'])
    ->name('person.store');