<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('log-in', 'TenantController@logIn');
Route::post('log-in', 'TenantController@logInHandler');
Route::get('sign-up', 'TenantController@signUp');
Route::post('sign-up', 'TenantController@signUpHandler');
Route::get('log-out', 'TenantController@logOutHandler');


Route::group(['prefix' => 'dashboard', 'middleware' => ['auth.tenant']], function() {
    Route::get('/', ['as' => 'dashboard.home', 'uses' => 'Dashboard\HomeController@index']);

    //
    // Trend
    Route::group(['prefix' => 'trend'], function() {
        Route::get('/', 'Dashboard\TrendController@index');
    });
});
