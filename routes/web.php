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

// ROTTA PER CREARE NUOVI DATI IN FORM:
Route::get('/person/create', [MainController::class, 'createNewPerson'])
    ->name('create.person');

// ROTTA PER RICEZIONE DATI DAL FORM:
Route::post('person/store', [MainController::class, 'personStore'])
    ->name('person.store');

// ROTTA PER RITORNARE FORM CON VECCHI DATI:
Route::get('/person/edit/{person}', [MainController::class, 'editPerson'])
    ->name('edit.person');

// ROTTA PER RICEZIONE DATI VECCHI DAL FORM:
Route::post('/person/update/{person}', [MainController::class, 'personUpdate'])
    ->name('update.person');