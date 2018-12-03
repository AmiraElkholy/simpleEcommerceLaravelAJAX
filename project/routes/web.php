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

Route::get('/', function () {
    if (Auth::check()) {
        return view('index');
    }
    //if not authenticated
    return view('auth.login');
});



Route::get('/categories', 'CategoriesController@index');
Route::get('/categories/{id}', 'CategoriesController@show')->where('id', '[0-9]+');
Route::get('/categories/{id}/edit', 'CategoriesController@edit')->where('id', '[0-9]+');
Route::post('/categories/{id}/update', 'CategoriesController@update')->where('id', '[0-9]+');
Route::get('/categories/{id}/destroy', 'CategoriesController@destroy')->where('id', '[0-9]+');
Route::get('/categories/create', 'CategoriesController@create');
Route::post('/categories', 'CategoriesController@store');


Route::get('/products', 'ProductsController@index');
Route::get('/products/{id}', 'ProductsController@show')->where('id', '[0-9]+');
Route::get('/products/{id}/edit', 'ProductsController@edit')->where('id', '[0-9]+');
Route::post('/products/{id}/update', 'ProductsController@update')->where('id', '[0-9]+');
Route::get('/products/{id}/destroy', 'ProductsController@destroy')->where('id', '[0-9]+');
Route::get('/products/create', 'ProductsController@create');
Route::post('/products', 'ProductsController@store');
Route::post('/products/add', 'ProductsController@addProductService');
Route::get('/products/get/{id}', 'ProductsController@getProductService')->where('id', '[0-9]+');

Route::get('/products/manage', 'ProductsController@manage');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
