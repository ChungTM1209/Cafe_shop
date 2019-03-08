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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix'=>'products'],function (){
    Route::get ('/','ProductController@index')->name('products.index');
    Route::get('/create','ProductController@create')->name('products.create');
    Route::post('/create','ProductController@store')->name('products.store');
    Route::get('/{id}/edit','ProductController@edit')->name('products.edit');
    Route::post('/{id}/edit','ProductController@update')->name('products.update');
    Route::get('/{id}/show','ProductController@show')->name('products.show');
    Route::get('/{id}/destroy','ProductController@destroy')->name('products.destroy');
});

Route::get('table', 'TableController@index')->name('index');
Route::get('category', 'CategoryController@index')->name('category.index');

