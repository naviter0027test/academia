<?php
Route::get('/','Web\IndexController@index');
Route::get('/content1/{id}',  'Web\IndexController@content1');
Route::get('/cooperation/{id}',  'Web\IndexController@cooperation');
Route::get('/contact/{pid?}',  'Web\IndexController@contact');
Route::post('/mymail/send',  'Web\IndexController@mailSend');
Route::post('/mymail/forgetMail',  'Web\IndexController@forgetMail');
//Route::get('/news','Web\IndexController@news');
//Route::get('/newsDetail/{id}','Web\IndexController@newsDetail');
Route::get('/product/{id}','Web\IndexController@product');
Route::get('/search/{name}','Web\IndexController@searchP');
Route::get('/productList','Web\IndexController@productList');
Route::get('/introduce','Web\IndexController@introduce');
Route::get('/aboutus','Web\IndexController@aboutus');
Route::get('/organization','Web\IndexController@organization');
Route::get('/service','Web\IndexController@service');
Route::get('/cooperation','Web\IndexController@cooperation');
Route::get('/sitemap','Web\IndexController@sitemap');
Route::get('/login','Web\IndexController@login');
Route::get('/checkout1','Web\IndexController@checkout1');
Route::get('/checkout2','Web\IndexController@checkout2');

include ('web/User.php');
include ('web/News.php');
include ('web/ShopCart.php');
include ('web/Order.php');
include ('web/DyDoc.php');
include ('web/DataSearch.php');