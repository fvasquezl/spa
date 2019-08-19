<?php

use Illuminate\Http\Request;

Route::group([
    'prefix' => 'auth',
    'namespace' =>'Auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('register','RegisterController@store');
});
