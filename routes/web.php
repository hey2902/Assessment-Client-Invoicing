<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UnitController;

// Routes for clients
Route::resource('clients', ClientController::class);

// Routes for properties
Route::resource('properties', PropertyController::class);

// Routes for rooms
Route::resource('rooms', RoomController::class);

// Routes for units
Route::resource('units', UnitController::class);

// Route for payment calculation
Route::get('/clients/{client}/calculate-payment', [ClientController::class, 'calculateMonthlyPayment'])->name('clients.calculatePayment');


Route::get('/', function () {
    return view('welcome');
});
