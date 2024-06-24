<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile/{id}', [App\Http\Controllers\ProfileController::class, 'index']);