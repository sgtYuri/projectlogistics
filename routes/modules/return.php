<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReturnController;

/**
 * delivery Data Lists
 */
Route::get('/return', [ ReturnController::class, 'index' ])->name('return');


/** 
 * Create New return Form
*/
Route::get('/return/create', [ ReturnController::class, 'create' ])->name('return.create');


/**
 * Save New return to Database
*/
Route::post('/return/create/save', [ ReturnController::class, 'store' ])->name('return.create.save');


/** 
 * Edit return Record Form
*/
Route::get('/return/edit/{id}', [ ReturnController::class, 'edit' ])->name('return.edit');


/** 
 * Update return Record to Database
*/
Route::post('/return/update/{id}', [ ReturnController::class, 'update' ])->name('return.update');


/** 
 * Delete return Record to Database
*/
Route::get('/return/delete/{id}', [ ReturnController::class, 'delete' ])->name('return.delete');



