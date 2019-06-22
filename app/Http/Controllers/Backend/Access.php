<?php
Route::group([
    'prefix'    => 'access',
    'as'        => 'access',
    'namespace' =>  'Access',
], function (){
    // User manager
    Route::group([

    ], function (){
        Route::group(['namespace' => 'User'], function (){

        });
    });
});