<?php
Route::get('/productStyle',  'Xdmin\ProductStyleController@index')->middleware('CheckXdminLogin');
Route::post('/productStyle',  'Xdmin\ProductStyleController@save')->middleware('CheckXdminLogin');