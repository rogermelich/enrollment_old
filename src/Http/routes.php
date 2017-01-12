<?php

Route::group([
    'middleware' => 'web'], function(){
    Route::group(['middleware' => ['auth']], function () {
        Route::resource('enrollment', 'EnrollmentsController');
    });
});


Route::group([
    'middleware' => 'api',
    'prefix' => 'api',
], function() {
//    Route::group(['prefix' => 'api/v1.0', 'middleware' => ['auth.api']], function () {
    Route::group(['prefix' => 'v1'], function () {
        Route::resource('enrollment', 'EnrollmentsController');
    });
});
