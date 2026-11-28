<?php

use App\Http\Controllers\MapController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;

Route::get('/', [MapController::class, 'index'])->name('map');



// url terpisah
Route::get('/login', function () {
    return view('login.index');
})->name('login');

Route::post('/routing/walking', [RoutingController::class, 'getWalkingRoute'])
    ->name('routing.walking');


