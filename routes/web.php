<?php

Route::get('/', 'HomeController@index')->name('index');
Route::get('nosotros', 'HomeController@nosotros')->name('nosotros');
Route::get('productos', 'HomeController@productos')->name('productos');
Route::get('contactanos', 'HomeController@contactanos')->name('contactanos');
Route::get('email', 'HomeController@email')->name('email');
