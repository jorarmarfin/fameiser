<?php

Route::get('/', 'HomeController@index')->name('index');
Route::get('nosotros', 'HomeController@nosotros')->name('nosotros');
Route::get('productos', 'HomeController@productos')->name('productos');
Route::get('producto/{prod?}', 'HomeController@producto')->name('producto');
Route::get('contactanos', 'HomeController@contactanos')->name('contactanos');
Route::get('servicios', 'HomeController@servicios')->name('servicios');
Route::get('ofertas', 'HomeController@ofertas')->name('ofertas');
Route::get('garantia', 'HomeController@garantia')->name('garantia');
Route::get('email', 'HomeController@email')->name('email');
