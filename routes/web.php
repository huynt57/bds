<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Frontend\MainController@index');


Route::group(['prefix' => 'admin'], function () {

    Route::get('/', 'Backend\DashboardController@index');
    Route::group(['prefix' => 'house'], function() {
        Route::get('create', 'Backend\HouseController@create');
    });
});