<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PriceController;
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

Route::get('/', [PriceController::class,'index'])->name('main');
Route::post('/', [PriceController::class,'show'])->name('show');
Auth::routes();

Route::resource('/items',ItemController::class)->names('items');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
