<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientController;
use App\Http\Controllers\VehicleController;

Route::get('/', function () {
    return view('home');
});


Route::get('/clients/search', [ClientController::class, 'search'])->name('clients.search');


Route::resource('clients', ClientController::class);
Route::resource('vehicles', VehicleController::class);

