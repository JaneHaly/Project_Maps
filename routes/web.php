<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login.index');
});

// url terpisah
Route::get('/login', function () {
    return view('login.index');
})->name('login');
