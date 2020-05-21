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
    return view('welcome');
});

Route::resource('admin/pages', 'PageController');
Route::resource('admin/categories', 'CategoryController');
Route::resource('admin/restaurants', 'RestaurantsController');
//restaurant_category

//Route::resource('admin/articles','ArticleController');
