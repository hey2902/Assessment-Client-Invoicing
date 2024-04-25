<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UnitController;

// Routes for clients
Route::resource('clients', ClientController::class);
// Route for displaying a list of clients
Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');

// Route for displaying the form to create a new client
Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');

// Route for storing a new client
Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');

// Route for displaying the details of a specific client
Route::get('/clients/{client}', [ClientController::class, 'show'])->name('clients.show');

// Route for displaying the form to edit a specific client
Route::get('/clients/{client}/edit', [ClientController::class, 'edit'])->name('clients.edit');

// Route for updating a specific client
Route::put('/clients/{client}', [ClientController::class, 'update'])->name('clients.update');

// Route for deleting a specific client
Route::delete('/clients/{client}', [ClientController::class, 'destroy'])->name('clients.destroy');

// Routes for properties
Route::resource('properties', PropertyController::class);
// Route for displaying a list of properties
Route::get('/properties', [PropertyController::class, 'index'])->name('properties.index');

// Route for displaying the form to create a new client
Route::get('/properties/create', [PropertyController::class, 'create'])->name('properties.create');

// Route for storing a new client
Route::post('/properties', [PropertyController::class, 'store'])->name('properties.store');

// Route for displaying the details of a specific client
Route::get('/properties/{client}', [PropertyController::class, 'show'])->name('properties.show');

// Route for displaying the form to edit a specific client
Route::get('/properties/{client}/edit', [PropertyController::class, 'edit'])->name('properties.edit');

// Route for updating a specific client
Route::put('/properties/{client}', [PropertyController::class, 'update'])->name('properties.update');

// Route for deleting a specific client
Route::delete('/properties/{client}', [PropertyController::class, 'destroy'])->name('properties.destroy');

// Routes for rooms
Route::resource('rooms', RoomController::class);
// Route for displaying a list of rooms
Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');

// Route for displaying the form to create a new client
Route::get('/rooms/create', [RoomController::class, 'create'])->name('rooms.create');

// Route for storing a new client
Route::post('/rooms', [RoomController::class, 'store'])->name('rooms.store');

// Route for displaying the details of a specific client
Route::get('/rooms/{client}', [RoomController::class, 'show'])->name('rooms.show');

// Route for displaying the form to edit a specific client
Route::get('/rooms/{client}/edit', [RoomController::class, 'edit'])->name('rooms.edit');

// Route for updating a specific client
Route::put('/rooms/{client}', [RoomController::class, 'update'])->name('rooms.update');

// Route for deleting a specific client
Route::delete('/rooms/{client}', [RoomController::class, 'destroy'])->name('rooms.destroy');

// Routes for units
Route::resource('units', UnitController::class);
// Route for displaying a list of units
Route::get('/units', [UnitController::class, 'index'])->name('units.index');

// Route for displaying the form to create a new client
Route::get('/units/create', [UnitController::class, 'create'])->name('units.create');

// Route for storing a new client
Route::post('/units', [UnitController::class, 'store'])->name('units.store');

// Route for displaying the details of a specific client
Route::get('/units/{client}', [UnitController::class, 'show'])->name('units.show');

// Route for displaying the form to edit a specific client
Route::get('/units/{client}/edit', [UnitController::class, 'edit'])->name('units.edit');

// Route for updating a specific client
Route::put('/units/{client}', [UnitController::class, 'update'])->name('units.update');

// Route for deleting a specific client
Route::delete('/units/{client}', [UnitController::class, 'destroy'])->name('units.destroy');

// Route for payment calculation
Route::get('/clients/{client}/calculate-payment', [ClientController::class, 'calculateMonthlyPayment'])->name('clients.calculatePayment');


Route::get('/', function () {
    return view('welcome');
});
