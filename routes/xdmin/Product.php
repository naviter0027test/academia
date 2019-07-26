<?php
Route::get('/product',  'Xdmin\ProductController@index')->middleware('CheckXdminLogin');
Route::get('/product/json',  'Xdmin\ProductController@getJson')->middleware('CheckXdminLogin');
Route::get('/product/subJson/{id}',  'Xdmin\ProductController@subJson')->middleware('CheckXdminLogin');
Route::get('/product/edit/{id}',  'Xdmin\ProductController@edit')->middleware('CheckXdminLogin');
Route::post('/product',  'Xdmin\ProductController@save')->middleware('CheckXdminLogin');
Route::post('/product/del',  'Xdmin\ProductController@del')->middleware('CheckXdminLogin');
Route::get('/productImg/{id}',  'Xdmin\ProductController@pi')->middleware('CheckXdminLogin');
Route::post('/productImg/add',  'Xdmin\ProductController@pi_add')->middleware('CheckXdminLogin');
Route::post('/productImg/edit',  'Xdmin\ProductController@pi_edit')->middleware('CheckXdminLogin');
Route::post('/productImg/del',  'Xdmin\ProductController@pi_del')->middleware('CheckXdminLogin');
