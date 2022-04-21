<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllProductController;
use App\Http\Controllers\CategoryController;

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
Route::get('product/list', [AllProductController::class , 'index']);
Route::get('product/create', [AllProductController::class , 'create']);
Route::post('product/add', [AllProductController::class , 'store']);
Route::get('product/edit/{id}', [AllProductController::class , 'edit']);
Route::get('product/update/{id}', [AllProductController::class , 'update']);
Route::get('product/delete/{id}', [AllProductController::class , 'destroy']);

// category 

Route::get('category/list', [CategoryController::class , 'index']);
Route::get('category/add', [CategoryController::class , 'store']);
Route::get('category/edit/{id}', [CategoryController::class , 'edit']);
Route::get('category/update/{id}', [CategoryController::class , 'update']);
Route::get('category/delete/{id}', [CategoryController::class , 'destroy']);




// Route::get('/', function () {
//     return view('welcome');
// });
