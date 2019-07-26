<?php
Route::get('/psubmenu',  'Xdmin\PSubmenuController@index')->middleware('CheckXdminLogin');
Route::get('/psubmenu/json',  'Xdmin\PSubmenuController@getJson')->middleware('CheckXdminLogin');
Route::get('/psubmenu/edit/{id}',  'Xdmin\PSubmenuController@edit')->middleware('CheckXdminLogin');
Route::post('/psubmenu',  'Xdmin\PSubmenuController@save')->middleware('CheckXdminLogin');
Route::post('/psubmenu/del',  'Xdmin\PSubmenuController@del')->middleware('CheckXdminLogin');
