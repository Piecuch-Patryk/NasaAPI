<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApodController;
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

Route::controller(ListingController::class)->group(function() {
    Route::get('/', 'index')->name('listings.index');
});

Route::controller(ApodController::class)->group(function() {
    Route::get('/apods', 'index')->name('apods.index');
    Route::get('/apods/show/{apod}', 'show')->name('apods.show');
});