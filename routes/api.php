<?php

Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {

});

Route::post('/user/login', [
    'uses' => 'API\AuthController@signin'
]);
//content
Route::group(['prefix'=>'content'], function(){
  Route::get('/list/{otp}', 'API\ContentController@check');
});