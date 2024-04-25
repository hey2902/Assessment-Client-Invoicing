<?php

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