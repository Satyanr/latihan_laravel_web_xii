<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home.index');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::prefix('latihan')->group(function(){
    Route::get('/', [App\Http\Controllers\Controller::class, 'latihan'])->name('latihan');
    Route::post('/store', [App\Http\Controllers\MapsController::class, 'store'])->name('map.store');

});
