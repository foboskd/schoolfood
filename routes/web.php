<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {
    Route::resource('/schools', SchoolController::class)->only([
        'index', 'create', 'store'
    ]);
    Route::get('/schools/{uuid}/reviews', 'SchoolController@reviews');
});

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/{any}', SiteController::class)->where('any', '.*');
});
