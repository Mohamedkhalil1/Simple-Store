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

use App\Category;
use App\Product;

Route::resource('category', 'CategoryController');

Route::resource('product', 'ProductController');

Route::resource('/land', 'LandController');
Route::get('/land/category/{category_id}','LandController@category')->name('land.category');
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
