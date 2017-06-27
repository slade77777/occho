<?php
Route::get('product', 'ProductController@index')->name('product');
Route::get('product/add', 'ProductController@add')->name('product.add');
Route::post('product/add', 'ProductController@create')->name('product.create');
Route::get('product/delete/{id}', 'ProductController@delete')->name('product.delete');
Route::get('product/edit/{id}', 'ProductController@edit')->name('product.edit');
Route::post('product/update', 'ProductController@update')->name('product.update');


