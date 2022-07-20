<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('peb/index', 'HomeController@index')->name('home');

Route::get('/peb', 'UserController@index');

//Route::resource('peb', 'HomeController');
Route::get('peb', 'HomeController@index');
Route::post('peb/find', 'HomeController@find');
Route::get('peb/show', 'HomeController@show');
Route::get('peb/add', 'HomeController@add');
Route::post('peb/create', 'HomeController@create');
Route::get('peb/edit', 'HomeController@edit');
Route::post('peb/update', 'HomeController@update');
Route::get('peb/del', 'HomeController@del');
Route::post('peb/remove', 'HomeController@remove');