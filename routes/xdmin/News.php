<?php
Route::get('/news','Xdmin\NewsController@f_index')->middleware('CheckXdminLogin');
Route::get('/news/json','Xdmin\NewsController@f_json')->middleware('CheckXdminLogin');
Route::get('/news/edit/{id}','Xdmin\NewsController@f_edit')->middleware('CheckXdminLogin');
Route::post('/news/del',  'Xdmin\NewsController@f_del')->middleware('CheckXdminLogin');
Route::post('/news',  'Xdmin\NewsController@f_save')->middleware('CheckXdminLogin');