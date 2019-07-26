<?php
Route::get('/manager','Xdmin\ManagerController@index')->middleware('CheckXdminLogin');
Route::get('/manager/json','Xdmin\ManagerController@getJson')->middleware('CheckXdminLogin');
Route::get('/manager/edit/{id}','Xdmin\ManagerController@edit')->middleware('CheckXdminLogin');
Route::post('/manager/del',  'Xdmin\ManagerController@del')->middleware('CheckXdminLogin');
Route::post('/manager/save_data',  'Xdmin\ManagerController@save_data')->middleware('CheckXdminLogin');