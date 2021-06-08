<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransportationController;

/**
 * transportation Data Lists
 */
Route::get('/transportation', [ TransportationController::class, 'index' ])->name('transportation');


/** 
 * Create New transportation Form
*/
Route::get('/transportation/create', [ TransportationController::class, 'create' ])->name('transportation.create');


/**
 * Save New transportation to Database
*/
Route::post('/transportation/create/save', [ TransportationController::class, 'store' ])->name('transportation.create.save');


/** 
 * Edit transportation Record Form
*/
Route::get('/transportation/edit/{id}', [ TransportationController::class, 'edit' ])->name('transportation.edit');


/** 
 * Update transportation Record to Database
*/
Route::post('/transportation/update/{id}', [ TransportationController::class, 'update' ])->name('transportation.update');


/** 
 * Delete transportation Record to Database
*/
Route::get('/transportation/delete/{id}', [ TransportationController::class, 'delete' ])->name('transportation.delete');