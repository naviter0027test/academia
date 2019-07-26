<?php
Route::any('/order/step3/{lidm}','Web\OrderController@step3');
Route::post('/order','Web\OrderController@newAdd');
Route::get('/order',  'Web\OrderController@index');