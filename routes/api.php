<?php

Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {

});

Route::post('/user/login', 'API\AuthController@signin');
Route::get('/getUser', 'API\AuthController@index');

Route::group(['prefix'=>'content'], function(){
  Route::get('/list/{otp}', 'API\ContentController@api_content');
  Route::get('/download/{otp}/{id}', 'API\ContentController@download');
});