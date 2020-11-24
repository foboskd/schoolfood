<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers\Admin'], function () {
    Route::resource('/schools', SchoolController::class)->only([
        'create', 'store'
    ]);
});

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/{any}', SiteController::class)->where('any', '.*');
});
