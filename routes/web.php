<?php

use App\Http\Controllers\Admin\CategoryController;
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
    return view('client.home');
});

Route::get('/adminpanel/categories' , [CategoryController::class , 'index']);
Route::get('/adminpanel/categories/create' , [CategoryController::class , 'create']);
Route::post('/adminpanel/categories/store' , [CategoryController::class , 'store']);
Route::get('/adminpanel/categories/{category}/edit' , [CategoryController::class , 'edit']);
Route::patch('/adminpanel/categories/{category}/update' , [CategoryController::class , 'update']);
Route::delete('/adminpanel/categories/{category}' , [CategoryController::class , 'destroy']);
