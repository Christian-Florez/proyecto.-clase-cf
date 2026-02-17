<?php

use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\productController;
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
    return view('welcome');
});
Route::get('/home', Homecontroller::class);

Route::prefix("/product")->controller(function () {
    Route::get('/index', "index");
    Route::get('/create', "create");
    Route::get('/{id}/{categoria?}',"show");
});







