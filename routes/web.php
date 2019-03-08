<?php



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
<<<<<<< HEAD

=======
Route::get('category/{id}', 'CategoryController@filterByCategory')->name('category.filter');
>>>>>>> a89824a49ddf3a7614e8d182a1aec178290f3b83
