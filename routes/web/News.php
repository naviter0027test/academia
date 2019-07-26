<?php
Route::get('/news','Web\NewsController@f_index');
Route::get('/news/detail/{id}','Web\NewsController@f_detail');