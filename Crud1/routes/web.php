<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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

Route::get('/',[ProductsController::class,'index'])->name('index');
Route::get('/create',[ProductsController::class,'create'])->name('insert');
Route::post('/store',[ProductsController::class,'store'])->name('store');
Route::get('/delete/{id}',[ProductsController::class,'destroy'])->name('destroy');
Route::get('/edit/{id}',[ProductsController::class,'edit'])->name('edit');
Route::put('/update/{id}',[ProductsController::class,'update'])->name('update');

