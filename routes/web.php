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

Route::get('/','App\Http\Controllers\HomeController@index');
Route::get('trang-chu','App\Http\Controllers\HomeController@index');
Route::get('loai-san-pham', 'App\Http\Controllers\ProductController@product_type');
Route::get('san-pham', 'App\Http\Controllers\ProductController@product');
