<?php
//Route::post('/user','Web\UserController@saveData');
Route::post('/user/login','Web\UserController@login');
Route::post('/user/register','Web\UserController@register');
Route::get('/user/edit','Web\UserController@edit');
Route::get('/user/logout','Web\UserController@logout');