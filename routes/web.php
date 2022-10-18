<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// All Listings
Route::get('/', [ListingController::class, 'index']);

//Show create form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

//Store Listing data
Route::post('/listings', [ListingController::class, 'store']);

//Show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

//Update listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

//Delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

//Manage listing
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

//Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

//Show Register create form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//Create new user
Route::post('/users', [UserController::class, 'store']);

//Login user
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Logout user
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Login auth
Route::post('/users/authenticate', [UserController::class, 'authenticate']);







/* Route::get("/hello", function () {
    return response("<h1>Hello World</h1>");
});

Route::get("/posts/{id}", function ($id) {
    return response("Post" . $id);
})-> where("id", "[0-9]+");

Route::get('/search', function (Request $request) {
    return ($request->name . ' ' . $request->city);
});
 */

 //common resource routes:
 //index - show all listings
 //show - show single listing
 //create - show from to create new listing
 //store - store new listing
 //edit - show from to edit listing
 //update - update listing
 //destroy - delete listing