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


//All Listings for the Gallery
Route::get('/',[ListingController::class, 'index']);

// Show the create form 
Route::get('/create',[ListingController::class, 'create']);

//Store the gallery from
Route::post('/gallery', [ListingController::class, 'store']);

//Show individual listing
Route::get('/gallery/{listing}',[ListingController::class, 'show']);
