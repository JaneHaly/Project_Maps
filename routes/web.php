<?php

use App\Http\Controllers\MapController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MapController::class, 'index'])->name('map');



// url terpisah
Route::get('/login', function () {
    return view('login.index');
})->name('login');


