<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;

/**
 * supplier Data Lists
 */
Route::get('/supplier', [ SupplierController::class, 'index' ])->name('supplier');


/** 
 * Create New supplier Form
*/
Route::get('/supplier/create', [ SupplierController::class, 'create' ])->name('supplier.create');


/** 
 * Save New supplier to Database
*/
Route::post('/supplier/create/save', [ SupplierController::class, 'store' ])->name('supplier.create.save');


/** 
 * Edit supplier Record Form
*/
Route::get('/supplier/edit/{id}', [ SupplierController::class, 'edit' ])->name('supplier.edit');


/** 
 * Update supplier Record to Database
*/
Route::post('/supplier/update/{id}', [ SupplierController::class, 'update' ])->name('supplier.update');


/** 
 * Delete supplier Record to Database
*/
Route::get('/supplier/delete/{id}', [ SupplierController::class, 'delete' ])->name('supplier.delete');





