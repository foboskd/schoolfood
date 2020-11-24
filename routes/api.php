<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers\Api'], function () {
    Route::get('/schools/{uuid}', 'SchoolController@show');
    Route::post('/schools/{uuid}/review', 'ReviewController@store');
});