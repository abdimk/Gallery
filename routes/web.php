<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//All Listings for the gallery
Route::get('/',[ListingController::class, 'index']);


//Search for Listings in the gallery
Route::post('/search', [ListingController::class, 'search']);

// Show the create form 
Route::get('/create',[ListingController::class, 'create']);

//Store the gallery from
Route::post('/gallery', [ListingController::class, 'store']);

//Show the edit from
Route::get('/gallery/{listing}/edit', [ListingController::class, 'edit']);


//Show individual listing
Route::get('/gallery/{listing}',[ListingController::class, 'show']);

