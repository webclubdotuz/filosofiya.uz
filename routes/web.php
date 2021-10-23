<?php


Route::get('cache', function (){
    \Artisan::call('config:cache');
    return redirect()->back();
});

Route::get('/', 'PageController@index');
Route::get('/category/{slug}', 'PageController@posts');
Route::get('/post/{id}', 'PageController@viewPost');
Route::get('/contact', 'PageController@contact');
Route::post('/contact', 'PageController@storeMessage');
Route::get('/search', 'PageController@search');
Route::get('/posts/{id}/{tag}', 'PageController@postsByTag');
Route::get('/page/{slug}', 'PageController@page');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
