<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllProductController;

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
Route::get('product/add', [AllProductController::class , 'store']);
Route::get('product/edit/{id}', [AllProductController::class , 'edit']);
Route::get('product/update/{id}', [AllProductController::class , 'update']);
Route::get('product/delete/{id}', [AllProductController::class , 'destroy']);


// Route::get('/', function () {
//     return view('welcome');
// });
