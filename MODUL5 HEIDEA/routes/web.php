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

Route::get('/', function () {
    return view('home');
});

Route::get('/history', function () {
    return view('history');
});

Route::get('/products', 'productsController@index');
Route::get('/addproduct', 'productsController@add');
Route::post('/addproduct', 'productsController@adds');
Route::get('/updateproduct/{id}', 'productsController@update');
Route::put('/updateproducts/{id}', 'productsController@updates');
Route::get('/deleteproduct/{id}', 'productsController@delete');
Route::get('/orders', 'ordersController@index');
