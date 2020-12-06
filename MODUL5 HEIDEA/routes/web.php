<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/products', function () {
    return view('products');
})->name('product');

Route::get('/orders', function () {
    return view('orders');
})->name('order');

Route::get('/history', function () {
    return view('history');
})->name('history');


Route::get('/addproducts', 'productsController@add');
Route::post('/addproducts', 'productsController@adds');
Route::get('/updateproduct/{id}', 'productsController@update');
Route::put('/updateproducts/{id}', 'productsController@updates');
Route::get('/deleteproduct/{id}', 'productsController@delete');
