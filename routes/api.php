<?php

Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {

});

Route::post('/user/login', 'API\AuthController@signin');
Route::get('/login', 'API\AuthController@index');
//content
Route::group(['prefix'=>'content'], function(){
  Route::get('/list/{otp}', 'API\ContentController@index');
});