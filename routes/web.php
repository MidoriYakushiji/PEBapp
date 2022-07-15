<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/peb', 'UserController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
