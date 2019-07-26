<?php
Route::get('/user','Xdmin\UserController@index')->middleware('CheckXdminLogin');
Route::get('/user/json','Xdmin\UserController@getJson')->middleware('CheckXdminLogin');
Route::get('/user/edit/{id}','Xdmin\UserController@edit')->middleware('CheckXdminLogin');
Route::post('/user/del',  'Xdmin\UserController@del');
Route::post('/user/save_data',  'Xdmin\UserController@save_data')->middleware('CheckXdminLogin');