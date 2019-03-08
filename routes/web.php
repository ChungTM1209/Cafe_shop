<?php



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('table', 'TableController@index')->name('index');
Route::get('category', 'CategoryController@index')->name('category.index');
Route::get('category/{id}', 'CategoryController@filterByCategory')->name('category.filter');
