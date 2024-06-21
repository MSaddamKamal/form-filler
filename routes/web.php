<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/contact', [FormController::class, 'showForm']);
Route::post('/contact', [FormController::class, 'submitForm']);
Route::get('/api/user/{id}', [FormController::class, 'getUserData']);

Route::get('/auto-fill-form/{id}', [FormController::class, 'autoFillForm']);

