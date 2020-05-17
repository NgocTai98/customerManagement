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

Route::get('/', 'IndexController@getIndex');
Route::get('/contact', 'IndexController@getContact');


Route::get('/customer1', 'customerController@getCustomer');
Route::get('/add-customer', 'customerController@getAddCustomer');
Route::post('/add-customer', 'customerController@postAddCustomer');
Route::get('/edit-customer/{id}', 'customerController@getEditCustomer');
Route::post('/edit-customer/{id}', 'customerController@postEditCustomer');
Route::get('/del-customer/{id}', 'customerController@deleteCustomer');
Route::post('/customer/search', 'customerController@searchCustomer');


Route::get('/host', 'hostController@getHost');
Route::get('/add-host', 'hostController@getAddHost');
Route::post('/add-host', 'hostController@postAddHost');
Route::get('/edit-host/{id}', 'hostController@getEditHost');
Route::post('/edit-host/{id}', 'hostController@postEditHost');
Route::get('/del-host/{id}', 'hostController@deleteHost');


Route::get('/list-product', 'productController@getProduct');
Route::get('/add-product', 'productController@getAddProduct');
Route::post('/add-product', 'productController@postAddProduct');
Route::get('/edit-product/{id}', 'productController@getEditProduct');
Route::post('/edit-product/{id}', 'productController@postEditProduct');
Route::get('/del-product/{id}', 'productController@deleteProduct');
Route::get('/detail-product/{id}', 'productController@getDetailProduct');
Route::get('/del-image/{id}', 'productController@deleteImage');
