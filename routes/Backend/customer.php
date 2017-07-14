<?php

Route::get('customer', 'CustomerController@index')->name('customer');
Route::get('customer/add', 'CustomerController@add')->name('customer.add');
Route::post('customer/add', 'CustomerController@create')->name('customer.create');
Route::get('customer/delete/{id}', 'CustomerController@delete')->name('customer.delete');
Route::get('customer/edit/{id}', 'CustomerController@edit')->name('customer.edit');
Route::post('customer/update', 'CustomerController@update')->name('customer.update');


