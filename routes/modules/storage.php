<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StorageController;

/**
 * storage Data Lists
 */
Route::get('/storage', [ StorageController::class, 'index' ])->name('storage');


/** 
 * Create New storage Form
*/
Route::get('/storage/create', [ StorageController::class, 'create' ])->name('storage.create');


/** https://docs.google.com/presentation/d/1-0MuIQboCxLI3A1OevQQuDTDCTUoxk6N4sp0aPN_cX0/edit?usp=sharing
 * Save New storage to Database
*/
Route::post('/storage/create/save', [ StorageController::class, 'store' ])->name('storage.create.save');


/** 
 * Edit storage Record Form
*/
Route::get('/storage/edit/{id}', [ StorageController::class, 'edit' ])->name('storage.edit');


/** 
 * Update storage Record to Database
*/
Route::post('/storage/update/{id}', [ StorageController::class, 'update' ])->name('storage.update');


/** 
 * Delete storage Record to Database
*/
Route::get('/storage/delete/{id}', [ StorageController::class, 'delete' ])->name('storage.delete');





