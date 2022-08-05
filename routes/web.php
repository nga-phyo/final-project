<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LocalizationController;

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

Route::middleware('lang')->group(function(){

    Route::get('/', [PageController::class , 'home']);
    Route::get('about', [PageController::class , 'about']);
    Route::get('lang/{lang}', [LocalizationController::class, 'index']);

});
