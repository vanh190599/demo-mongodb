<?php

// admin
Route::get('/', 'AdminController@index')->name('admin.index');
Route::get('/create', 'AdminController@create')->name('admin.create');
Route::post('/store', 'AdminController@store')->name('admin.index');
Route::get('/edit', 'AdminController@edit')->name('admin.edit');
Route::post('/update', 'AdminController@update')->name('admin.update');

// test
Route::get('/test', 'AdminController@test')->name('admin.test');
Route::resource('form','FormController');

