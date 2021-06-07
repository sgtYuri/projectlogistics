<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DistributionController;

/**
 * assets Data Lists
 */
Route::get('/distribution', [ DistributionController::class, 'index' ])->name('distribution');


/** 
 * Create New assets Form
*/
Route::get('/distribution/create', [ DistributionController::class, 'create' ])->name('distribution.create');


/** https://docs.google.com/presentation/d/1-0MuIQboCxLI3A1OevQQuDTDCTUoxk6N4sp0aPN_cX0/edit?usp=sharing
 * Save New assets to Database
*/
Route::post('/distribution/create/save', [ DistributionController::class, 'store' ])->name('distribution.create.save');


/** 
 * Edit distribution Record Form
*/
Route::get('/distribution/edit/{id}', [ DistributionController::class, 'edit' ])->name('distribution.edit');


/** 
 * Update distribution Record to Database
*/
Route::post('/assets/update/{id}', [ DistributionController::class, 'update' ])->name('distribution.update');


/** 
 * Delete distribution Record to Database
*/
Route::get('/distribution/delete/{id}', [ DistributionController::class, 'delete' ])->name('distribution.delete');





