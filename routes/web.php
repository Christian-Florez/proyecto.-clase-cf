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
    Route::get('/index', "index")->name('product.index');
    Route::get('/create', "create");
    Route::get('/{id}/{categoria?}', "show");
    Route::delete('/{id}', "destroy")->name('product.destroy');
});

// Rutas adicionales con typo para compatibilidad
Route::get('/prodcut', [ProductController::class, 'index']);
Route::get('/prodcut/create', [ProductController::class, 'create']);

// store routes (product form submission)
Route::post('/product', [ProductController::class, 'store']);
Route::post('/product/store', [ProductController::class, 'store']);
// typo variants
Route::post('/prodcut', [ProductController::class, 'store']);
Route::post('/prodcut/store', [ProductController::class, 'store']);







