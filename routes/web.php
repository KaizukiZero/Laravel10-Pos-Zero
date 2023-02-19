<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController as Pages;

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

Route::get('/login', [Pages::class , 'login']);

Route::middleware(['auth', 'second'])->prefix('/')->group(function () {
    Route::get('dashboard', [Pages::class , 'dashboard']);

});
