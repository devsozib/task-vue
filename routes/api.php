<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('product-list',[ProductController::class,'index']);
Route::post('product-store',[ProductController::class,'store']);
Route::get('product/edit/{id}',[ProductController::class,'edit']);
Route::post('product/update/{id}',[ProductController::class,'update']);
Route::post('delete-product',[ProductController::class,'destroy']);
