<?php
Route::get('order', 'OrderController@index')->name('order');
Route::get('order/add', 'OrderController@add')->name('order.add');
Route::post('order/add', 'OrderController@create')->name('order.create');
Route::get('order/delete/{id}', 'OrderController@delete')->name('order.delete');
Route::get('order/edit/{id}', 'OrderController@edit')->name('order.edit');
Route::post('order/update', 'OrderController@update')->name('order.update');