<?php
Route::get('/order','Xdmin\OrderController@f_index')->middleware('CheckXdminLogin');
Route::get('/order/json','Xdmin\OrderController@f_json')->middleware('CheckXdminLogin');
Route::get('/order/detail/{code}','Xdmin\OrderController@f_detail')->middleware('CheckXdminLogin');
Route::get('/order/detailJson/{code}','Xdmin\OrderController@f_detail_json')->middleware('CheckXdminLogin');
Route::get('/order/edit/{id}','Xdmin\OrderController@f_edit')->middleware('CheckXdminLogin');
Route::post('/order/del',  'Xdmin\OrderController@f_del')->middleware('CheckXdminLogin');
Route::post('/order',  'Xdmin\OrderController@f_save')->middleware('CheckXdminLogin');