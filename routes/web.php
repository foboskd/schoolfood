<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'App\Http\Controllers\Auth'], function () {

    Route::post('/login', 'LoginController');

    Route::post('/logout', 'LogoutController');

});


Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'verify.admin']], function () {

    Route::resource('/schools', SchoolController::class)->except([
        'show'
    ]);

    Route::resource('/districts', DistrictController::class)->except([
        'show'
    ]);

    Route::resource('/users', UserController::class)->except([
        'show'
    ]);

    Route::get('/schools/{uuid}/reviews', 'SchoolController@reviews');

});

Route::group(['namespace' => 'App\Http\Controllers\Moderator', 'prefix' => 'moderator', 'middleware' => ['auth', 'verify.moderator']], function () {

    Route::resource('/schools', SchoolController::class)->only([
        'index', 'create', 'store'
    ]);

});

Route::group(['namespace' => 'App\Http\Controllers'], function () {

    Route::get('/login', 'SiteController@login')->name('login');

    Route::get('/{any}', 'SiteController@index')->where('any', '.*');

});
