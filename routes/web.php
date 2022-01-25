<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@index');
Route::get('/admin', 'AdminController@index');

Route::get('/{slug}', 'PageController@index');

//Parei o vídeo em 1:26:52