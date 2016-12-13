<?php

Route::group(['prefix' => 'api/v1.0', 'middleware' => ['auth.api']], function () {
    Route::resource('enrollment', 'EnrollmentsController');
});

Route::group(['middleware' => ['auth']], function () {
    Route::resource('enrollment', 'EnrollmentsController');

    Route::get('/test', function () {
        DB::listen(function ($event) {
            dump($event->sql);
            dump($event->bindings);
        });
        Stats::of(Scool\Enrollment\Models\Enrollment\Enrollment::class);
        return Stats::total();
    });
});
