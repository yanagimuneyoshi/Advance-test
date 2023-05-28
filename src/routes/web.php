<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Api\AddressController;
use  App\Http\Controllers\SearchController;

Route::get('/', [ContactController::class, 'index']);
Route::post('/contacts/confirm', [ContactController::class, 'confirm']);
Route::post('/contacts', [ContactController::class, 'store']);
Route::post('/', [ContactController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'category']);

Route::get('/address/{zip}', [AddressController::class, 'address']);
Route::get('/search', [SearchController::class,'search']);


Route::delete('/search/{id}', [SearchController::class, 'destroy']);