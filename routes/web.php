<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController as Pages;
use App\Http\Controllers\CoreController as Cores;

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

//root url to login page
Route::get('/', function () {
     return redirect('login');
});

//guest action
Route::get('/login', [Pages::class , 'login'])->name('login');
Route::post('/login', [Cores::class , 'login'])->name('admins_login');

//admin action
Route::middleware('auth:admin')->prefix('/')->group(function () {
    //get
    Route::get('dashboard', [Pages::class , 'dashboard'])->name('dashboard');
    Route::get('reservation', [Pages::class , 'reservations'])->name('reservation');
    Route::get('service', [Pages::class , 'services'])->name('service');
    Route::get('menu', [Pages::class , 'menupage'])->name('menupage');
    Route::get('delivery', [Pages::class , 'delivery'])->name('delivery');
    Route::get('accounting', [Pages::class , 'accounting'])->name('accounting');
    Route::get('logout',[Cores::class,'logout'])->name('logout');

    //post
});
