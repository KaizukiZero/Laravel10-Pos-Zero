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

Route::get('/', function () {
     return redirect('login');
});

Route::get('/login', [Pages::class , 'login'])->name('login');
Route::post('/login', [Cores::class , 'login'])->name('admins_login');

Route::middleware('auth:admin')->prefix('/')->group(function () {
    Route::get('dashboard', [Pages::class , 'dashboard'])->name('dashboard');
    Route::get('logout',[Cores::class,'logout'])->name('logout');
});
