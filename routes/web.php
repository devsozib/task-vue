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

// Route::get('/{any}', function () {
//     return view('welcome');
// })->where('any','.*');

Route::get('/', function () {
    return view('welcome');
});
Route::get('product-list',[ProductController::class,'index']);
Route::post('product-store',[ProductController::class,'store']);
Route::post('delete-product',[ProductController::class,'destroy']);
