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
        Route::get('list', 'Backend\HouseController@index');

        Route::get('house.data', ['as' => 'house.data',
            'uses' => 'Backend\HouseController@getHouseByAttribute'
        ]);
    });

    Route::group(['prefix' => 'menu'], function() {
        Route::get('/', 'Backend\MenuController@index');
    });
});