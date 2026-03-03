<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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




Route::get('/home', HomeController::class);

Route::prefix("/product")->controller(ProductController::class)->group(function () {
    Route::get('/index', "index");
    Route::get('/create', "create");
    Route::get('/{id}/{categoria?}', "show");
});

// Ruta adicional con typo para compatibilidad: /prodcut
Route::get('/prodcut', [ProductController::class, 'index']);







