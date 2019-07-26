<?php
Route::get('/dydoc','Xdmin\DyDocController@f_index')->middleware('CheckXdminLogin');
Route::get('/dydoc/json','Xdmin\DyDocController@f_json')->middleware('CheckXdminLogin');
Route::get('/dydoc/edit/{id}','Xdmin\DyDocController@f_edit')->middleware('CheckXdminLogin');
Route::post('/dydoc/del',  'Xdmin\DyDocController@f_del')->middleware('CheckXdminLogin');
Route::post('/dydoc',  'Xdmin\DyDocController@f_save')->middleware('CheckXdminLogin');