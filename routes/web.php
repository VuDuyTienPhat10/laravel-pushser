<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('chat', 'ChatController@chat');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
