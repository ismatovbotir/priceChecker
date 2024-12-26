<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\HomeController;
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

Auth::routes();

Route::get('/', [PriceController::class,'index'])->name('main');

Route::group(['prefix'=>'admin','as'=>'admin.','middleware'=>'auth'],function(){

    Route::get('/',[ItemController::class,'admin'])->name('index');

    Route::resource('/items',ItemController::class)->names('items');

    Route::get('/stat',[ItemController::class,'stat'])->name('stat');

});

Route::get('/{barcode}', [PriceController::class,'barcode'])->name('barcode');

Route::post('/', [PriceController::class,'show'])->name('show');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::fallback(function(){
    return to_route('main');
});