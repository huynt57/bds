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

    Route::group(['prefix' => 'house'], function () {
        Route::get('create', 'Backend\HouseController@create');
        Route::get('list', 'Backend\HouseController@index');

        Route::post('store', 'Backend\HouseController@store');

        Route::get('house.data', ['as' => 'house.data',
            'uses' => 'Backend\HouseController@getHouseByAttribute'
        ]);
    });

    Route::group(['prefix' => 'menu'], function () {
        Route::get('/', 'Backend\MenuController@index');
    });

    Route::group(['prefix' => 'user'], function () {
        Route::get('list', 'Backend\UserController@index');

        Route::get('user.data', ['as' => 'user.data',
            'uses' => 'Backend\UserController@getUserByAttribute'
        ]);
    });

    Route::group(['prefix' => 'category'], function () {
        Route::get('/', 'Backend\CategoryController@index');

        Route::post('store', 'Backend\CategoryController@store');

        Route::get('category.data', ['as' => 'category.data',
            'uses' => 'Backend\CategoryController@getCategoryByAttribute'
        ]);
    });
});