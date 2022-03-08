<?php

use Illuminate\Http\Request;
use App\Http\Controllers\externalController;
use App\Http\Controllers\phoneController;
use Illuminate\Support\Facades\Route;

Route::match(['get', 'post'], '/blogSingle/{id}', [externalController::class, 'blogSingle']);
Route::match(['get', 'post'], '/blogGroup', [externalController::class, 'blogGroup']);
Route::match(['get', 'post'], '/create', [externalController::class, 'Create']);
Route::match(['get', 'post', 'PUT'], '/editBlog', [externalController::class, 'editBlog']);
Route::match(['get', 'post','DELETE'], '/delete/{id}', [externalController::class, 'delete']);
Route::match(['get', 'post'], '/get_authors', [externalController::class, 'get_authors']);

// phone route 
Route::match(['get', 'post'], '/book', [phoneController::class,'Phone']);
Route::match(['get', 'post'], '/group', [phoneController::class,'Group']);
Route::match(['get', 'post', 'PUT'], '/edit', [externalController::class, 'editContact']);
Route::match(['get', 'post','DELETE'], '/deleteContact/{id}', [externalController::class, 'deleteContact']);