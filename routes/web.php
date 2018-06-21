<?php

Route::get('/', 'HomeController@index')->name('index');
Route::get('nosotros', 'HomeController@nosotros')->name('nosotros');
Route::get('productos', 'HomeController@productos')->name('productos');
