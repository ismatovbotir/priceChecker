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

Route::group(['middleware'=>['auth'],'prefix'=>'admin','as'=>'admin.'],function(){


    Route::resource('/items',ItemController::class)->middleware('auth')->names('items');

});

Route::get('/{barcode}', [PriceController::class,'barcode'])->name('barcode');
Route::post('/', [PriceController::class,'show'])->name('show');
Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::fallback(function(){
    return to_route('main');
});