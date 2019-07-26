<?php
Route::post('/addCart','Web\CartController@addCart');
Route::post('/cartDelItem','Web\CartController@cartDelItem');
Route::get('cartContent','Web\CartController@cartContent');
Route::get('webCartContent','Web\CartController@webCartContent');
Route::get('webCheckCount','Web\CartController@webCheckCount');

Route::get('carttest','Web\CartController@carttest');
Route::get('carttestdel','Web\CartController@carttestdel');