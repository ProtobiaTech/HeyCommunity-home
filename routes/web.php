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


Route::group(['prefix' => 'dashboard', 'middleware' => ['auth.tenant', 'tenantDataFilter']], function() {
    Route::get('/', ['as' => 'dashboard.home', 'uses' => 'Dashboard\HomeController@index']);

    //
    // Weathercock
    Route::group(['prefix' => 'weathercock'], function() {
        Route::get('trend', 'Dashboard\WeathercockController@trend');
    });

    //
    // Data
    Route::group(['prefix' => 'data'], function() {
        Route::get('/',                 'Dashboard\DataController@index');
        Route::get('user',              'Dashboard\DataController@user');
        Route::get('timeline',          'Dashboard\DataController@timeline');
    });

    //
    // Trend
    Route::group(['prefix' => 'trend'], function() {
        Route::get('my-trend', 'Dashboard\TrendController@myTrend');
        Route::get('all-tenant-trend', 'Dashboard\TrendController@allTenantTrend');
    });

    //
    // Guide
    Route::group(['prefix' => 'guide'], function() {
        Route::get('/', 'Dashboard\GuideController@index');
        Route::get('getting-started', 'Dashboard\GuideController@gettingStarted');
    });

    //
    // Setting
    Route::group(['prefix' => 'setting'], function() {
        Route::get('/', 'Dashboard\SettingController@index');
        Route::get('tenant-info', 'Dashboard\SettingController@tenantInfo');
        Route::get('edit-tenant-info', 'Dashboard\SettingController@editTenantInfo');
        Route::post('update-tenant-info', 'Dashboard\SettingController@updateTenantInfo');
    });
});
