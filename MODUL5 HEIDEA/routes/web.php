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

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/order', function () {
    return view('order');
})->name('order');

Route::get('/history', function () {
    return view('history');
})->name('hostory');


Route::get('/product/add', 'App\Http\Controllers\ProductController@addIndex')
->name('addIndex');
Route::post('/product/add', 'App\Http\Controllers\ProductController@addProduct')
->name('addProduct');
Route::get('/product/add/{id}', 'App\Http\Controllers\ProductController@updateIndex')
->name('updateIndex');
Route::post('/product/add/{id}', 'App\Http\Controllers\ProductController@updateProduct')
->name('updateProduct');
Route::post('/product/delete', 'App\Http\Controllers\ProductController@delete')
->name('delete');
Route::get('/order/detailorder/{id}', 'App\Http\Controllers\OrderController@detailorder')
->name('detailorder');
Route::post('/order/detailorder/add', 'App\Http\Controllers\OrderController@detailorderadd')
->name('detailorderadd');
