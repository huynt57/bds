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
Route::get('map', 'Frontend\MainController@getHouseByAttribute');
Route::get('get-house-marker', 'Frontend\MainController@getHouseMarker');
Route::get('agents', 'Frontend\MainController@getAgents');

Route::get('post/{slug}-{id}', 'Frontend\MainController@getPostBySlug')
    ->where(['slug' => '[a-zA-Z0-9-]+', 'id' => '[0-9-]+']);

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

    Route::group(['prefix' => 'post'], function () {
        Route::get('create', 'Backend\PostController@create');
        Route::get('list', 'Backend\PostController@index');

        Route::post('store', 'Backend\PostController@store');

        Route::get('post.data', ['as' => 'post.data',
            'uses' => 'Backend\PostController@getPostByAttribute'
        ]);
    });

    Route::group(['prefix' => 'menu'], function () {
        Route::get('/', 'Backend\MenuController@index');
        Route::post('store', 'Backend\MenuController@store');
        Route::post('update-state', 'Backend\MenuController@updateState');
    });

    Route::group(['prefix' => 'user'], function () {
        Route::get('list', 'Backend\UserController@index');
        Route::get('create', 'Backend\UserController@create');
        Route::post('store', 'Backend\UserController@store');
        Route::get('user.data', ['as' => 'user.data',
            'uses' => 'Backend\UserController@getUserByAttribute'
        ]);
    });

    Route::group(['prefix' => 'settings'], function () {
        Route::get('slides', 'Backend\SettingController@listSlides');

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