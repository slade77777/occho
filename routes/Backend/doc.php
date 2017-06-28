<?php
Route::get('doc', 'DocController@index')->name('document');
Route::get('doc/add', 'DocController@add')->name('document.add');
Route::post('doc/add', 'DocController@create')->name('document.create');
Route::get('doc/delete/{id}', 'DocController@delete')->name('document.delete');
Route::get('doc/edit/{id}', 'DocController@edit')->name('document.edit');
Route::post('doc/update', 'DocController@update')->name('document.update');