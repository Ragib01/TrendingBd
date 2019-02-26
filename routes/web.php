<?php

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

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'UserHomeController@index')->name('home');
Route::get('/product', 'ProductsController@index')->name('product');
Route::get('/product-list', 'ProductsController@productList')->name('productList');
Route::get('/cart', 'CartController@index')->name('cart');
