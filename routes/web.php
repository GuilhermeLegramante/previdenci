<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@dashboard')->name('dashboard');

Route::get('/tesseract', 'MainController@tesseract')->name('tesseract');

Route::get('/aws', 'MainController@aws')->name('aws');

Route::get('/grafika', 'MainController@grafika')->name('grafika');

Route::group(['middleware' => ['auth']], function () {
});
