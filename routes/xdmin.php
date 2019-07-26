<?php
include ('xdmin/News.php');
include ('xdmin/PSubmenu.php');
include ('xdmin/PageSetting.php');
include ('xdmin/User.php');
include ('xdmin/Manager.php');
include ('xdmin/DyDoc.php');
include ('xdmin/Product.php');
include ('xdmin/ProductStyle.php');
include ('xdmin/Order.php');
Route::get('/login', function () {
    return view('xdmin.login');
});
Route::post('/login', 'Xdmin\ManagerController@login');
Route::get('/logout', 'Xdmin\ManagerController@logout');
Route::get('/changePWD', 'Xdmin\ManagerController@changePWD');
Route::post('/changePWD', 'Xdmin\ManagerController@changePWDData');

Route::get('/content1/{id}',  'Xdmin\Content1Controller@edit')->middleware('CheckXdminLogin');
Route::post('/content1',  'Xdmin\Content1Controller@save')->middleware('CheckXdminLogin');
Route::get('/elfinder', function () {
    return view('xdmin.elfinder');
})->middleware('CheckXdminLogin');

Route::get('/elfinder1/{jsf?}', function ($jsf) {
    return view('xdmin.elfinder1',['jsf'=>$jsf]);
})->middleware('CheckXdminLogin');

Route::get('/banner','Xdmin\BannerController@get')->middleware('CheckXdminLogin');
Route::post('/banner',  'Xdmin\BannerController@save')->middleware('CheckXdminLogin');

Route::get('/youtube','Xdmin\YoutubeController@get')->middleware('CheckXdminLogin');
Route::post('/youtube',  'Xdmin\YoutubeController@save')->middleware('CheckXdminLogin');

Route::get('/act','Xdmin\ActController@get')->middleware('CheckXdminLogin');
Route::post('/act',  'Xdmin\ActController@save')->middleware('CheckXdminLogin');

Route::get('/list1/{type}','Xdmin\List1Controller@get')->middleware('CheckXdminLogin');
Route::get('/list1/{type}/json','Xdmin\List1Controller@getJson')->middleware('CheckXdminLogin');
Route::get('/list1/{type}/edit/{id}','Xdmin\List1Controller@edit')->middleware('CheckXdminLogin');
Route::post('/list1/del',  'Xdmin\List1Controller@del')->middleware('CheckXdminLogin');
Route::post('/list1',  'Xdmin\List1Controller@save')->middleware('CheckXdminLogin');

Route::get('/list2/{type}/json','Xdmin\List2Controller@getJson')->middleware('CheckXdminLogin');
Route::get('/list2/{type}/edit/{id}','Xdmin\List2Controller@edit')->middleware('CheckXdminLogin');
Route::get('/list2/{type}','Xdmin\List2Controller@get')->middleware('CheckXdminLogin');
Route::post('/list2/del',  'Xdmin\List2Controller@del')->middleware('CheckXdminLogin');
Route::post('/list2',  'Xdmin\List2Controller@save')->middleware('CheckXdminLogin');

Route::get('/list3/{type}/json','Xdmin\List3Controller@getJson')->middleware('CheckXdminLogin');
Route::get('/list3/{type}/edit/{id}','Xdmin\List3Controller@edit')->middleware('CheckXdminLogin');
Route::get('/list3/{type}','Xdmin\List3Controller@get')->middleware('CheckXdminLogin');
Route::post('/list3/del',  'Xdmin\List3Controller@del')->middleware('CheckXdminLogin');
Route::post('/list3',  'Xdmin\List3Controller@save')->middleware('CheckXdminLogin');

Route::get('/list4/{type}/json','Xdmin\List4Controller@getJson')->middleware('CheckXdminLogin');
Route::get('/list4/{type}/edit/{id}','Xdmin\List4Controller@edit')->middleware('CheckXdminLogin');
Route::get('/list4/{type}','Xdmin\List4Controller@get')->middleware('CheckXdminLogin');
Route::post('/list4/del',  'Xdmin\List4Controller@del')->middleware('CheckXdminLogin');
Route::post('/list4',  'Xdmin\List4Controller@save')->middleware('CheckXdminLogin');

Route::any('/elfinder/connector', 'Xdmin\ElfinderController@connector');
Route::get('/ckFileBrowserBrowse', function () {
    return view('xdmin.ck_file_browser_browse');
})->middleware('CheckXdminLogin');