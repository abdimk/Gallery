<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
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
// Route::get('/',[GalleryController::class, 'index']);
Route::get('/', function(){
    return view("index");
});
