<?php
Route::get('/pageSetting','Xdmin\PageSettingController@get')->middleware('CheckXdminLogin');
Route::post('/pageSetting',  'Xdmin\PageSettingController@save')->middleware('CheckXdminLogin');