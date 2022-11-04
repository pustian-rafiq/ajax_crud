<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('product.index');
// });

Route::get('/', [ProductController::class, 'ShowProducts']);
Route::post('/add/product', [ProductController::class, 'AddProduct'])->name('add.product');
Route::post('/update/product', [ProductController::class, 'UpdateProduct'])->name('update.product');