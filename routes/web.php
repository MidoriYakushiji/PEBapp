<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('peb/index', 'HomeController@index')->name('home');

Route::get('/peb', 'UserController@index');

Route::resource('peb', 'HomeController');
