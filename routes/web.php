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
Route::get('cloud', ['as' => 'home-cloud', 'uses' => 'HomeController@cloud']);
Route::get('business', ['as' => 'home-business', 'uses' => 'HomeController@business']);
Route::get('open-sources', ['as' => 'home-open-sources', 'uses' => 'HomeController@openSources']);
Route::get('jobs', ['as' => 'home-jobs', 'uses' => 'HomeController@jobs']);
Route::get('about-us', ['as' => 'home-about-us', 'uses' => 'HomeController@aboutUs']);

Route::get('log-in', 'TenantController@logIn');
Route::post('log-in', 'TenantController@logInHandler');
Route::get('sign-up', 'TenantController@signUp');
Route::post('sign-up', 'TenantController@signUpHandler');
Route::get('log-out', 'TenantController@logOutHandler');


Route::group(['prefix' => 'dashboard'], function() {
    Route::get('/', ['as' => 'dashboard.home', 'uses' => 'Dashboard\HomeController@index']);
});
