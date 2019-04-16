<?php

Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {

});

Route::post('/user/login', 'API\AuthController@signin');
Route::get('/getUser', 'API\AuthController@index');


Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function (){
    //content
  Route::group(['prefix'=>'content'], function(){
    Route::get('/list/{otp}', 'API\ContentController@index');
    Route::get('download/{id}', 'API\ContentController@download');
  });
});