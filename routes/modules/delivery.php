<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeliveryController;

/**
 * delivery Data Lists
 */
Route::get('/delivery', [ DeliveryController::class, 'index' ])->name('delivery');


/** 
 * Create New delivery Form
*/
Route::get('/delivery/create', [ DeliveryController::class, 'create' ])->name('delivery.create');


/**
 * Save New delivery to Database
*/
Route::post('/delivery/create/save', [ DeliveryController::class, 'store' ])->name('delivery.create.save');


/** 
 * Edit delivery Record Form
*/
Route::get('/delivery/edit/{id}', [ DeliveryController::class, 'edit' ])->name('delivery.edit');


/** 
 * Update delivery Record to Database
*/
Route::post('/delivery/update/{id}', [ DeliveryController::class, 'update' ])->name('delivery.update');


/** 
 * Delete delivery Record to Database
*/
Route::get('/delivery/delete/{id}', [ DeliveryController::class, 'delete' ])->name('delivery.delete');