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
Route::get('logout', 'Frontend\MainController@logout');
Route::get('map', 'Frontend\MainController@getHouseByAttribute');
Route::get('map-project', 'Frontend\MainController@getProjectByAttribute');
Route::get('map-ajax', 'Frontend\MainController@getHouseByAttributeAjax');
Route::get('map-project-ajax', 'Frontend\MainController@getProjectByAttributeAjax');
Route::get('get-house-marker', 'Frontend\MainController@getHouseMarker');
Route::get('agents', 'Frontend\MainController@getAgents');
Route::get('lien-he', 'Frontend\MainController@contact');
Route::get('yeu-thich', 'Frontend\MainController@getWishlist');
Route::get('dang-nhap', 'Frontend\AuthController@login');
Route::get('dang-ky', 'Frontend\AuthController@register');
Route::post('process-login', 'Frontend\AuthController@processLogin');
Route::post('process-register', 'Frontend\AuthController@processRegister');
Route::get('regions', 'Frontend\MainController@getRegions');

Route::post('connect-house-agent', 'Frontend\MainController@contactAgent');

Route::get('get-house-by-center', 'Frontend\MainController@getHouseByCenter');

Route::get('school', 'Frontend\MainController@getSchoolNearBy');



Route::post('contact/store', 'Frontend\MainController@storeContact');
Route::post('wishlist/store', 'Frontend\MainController@addToWishlist');

Route::get('post/{slug}-{id}', 'Frontend\MainController@getPostBySlug')
    ->where(['slug' => '[a-zA-Z0-9-]+', 'id' => '[0-9-]+']);

Route::get('house/{slug}-{id}', 'Frontend\MainController@detail')
    ->where(['slug' => '[a-zA-Z0-9-]+', 'id' => '[0-9-]+']);

Route::group(['prefix' => 'admin'], function () {

    Route::get('/', 'Backend\DashboardController@index');
    Route::get('thong-tin-ca-nhan', 'Backend\AdminController@getUser');
    Route::get('get-image-slide', 'Backend\SettingController@getImageSlide');
    Route::get('get-region-by-type', 'Backend\HouseController@getRegionByType');
    Route::get('get-region', 'Backend\HouseController@getRegion');
    Route::get('login', 'Backend\AdminController@login');
    Route::get('logout', 'Backend\AdminController@logout');
    Route::post('process-login', 'Backend\AdminController@processLogin');

    Route::group(['prefix' => 'house'], function () {
        Route::get('create', 'Backend\HouseController@create');
        Route::get('list', 'Backend\HouseController@index');
        Route::get('region', 'Backend\HouseController@region');
        Route::get('delete/{id}', 'Backend\HouseController@deleteHouse');
        Route::get('edit/{id}', 'Backend\HouseController@edit');
        Route::post('update/{id}', 'Backend\HouseController@update');
        Route::post('update/region/{id}', 'Backend\HouseController@updateRegion');
        Route::post('update-inline/{id}', 'Backend\HouseController@updateInline');
        Route::post('add-region', 'Backend\HouseController@addRegion');

        Route::post('store', 'Backend\HouseController@store');

        Route::get('house.data', ['as' => 'house.data',
            'uses' => 'Backend\HouseController@getHouseByAttribute'
        ]);
        Route::get('delete-region/{id}', 'Backend\HouseController@deleteRegion');
        Route::get('region.data', ['as' => 'region.data',
            'uses' => 'Backend\HouseController@getRegionByAttribute'
        ]);

        Route::post('region/update/{id}', 'Backend\HouseController@updateRegion');
    });

    Route::group(['prefix' => 'project'], function () {
        Route::get('create', 'Backend\ProjectController@create');
        Route::get('list', 'Backend\ProjectController@index');
        Route::get('region', 'Backend\ProjectController@region');
        Route::get('edit/{id}', 'Backend\ProjectController@edit');
        Route::post('update/{id}', 'Backend\ProjectController@update');
        Route::post('update-inline/{id}', 'Backend\ProjectController@updateInline');

        Route::post('store', 'Backend\ProjectController@store');

        Route::get('project.data', ['as' => 'project.data',
            'uses' => 'Backend\ProjectController@getProjectByAttribute'
        ]);
        Route::get('region.data', ['as' => 'region.data',
            'uses' => 'Backend\ProjectController@getRegionByAttribute'
        ]);
    });

    Route::group(['prefix' => 'post'], function () {
        Route::get('create', 'Backend\PostController@create');
        Route::get('list', 'Backend\PostController@index');
        Route::get('edit/{id}', 'Backend\PostController@edit');
        Route::post('update/{id}', 'Backend\PostController@update');
        Route::get('delete/{id}', 'Backend\PostController@destroy');

        Route::post('update-inline/{id}', 'Backend\PostController@updateInline');
        Route::post('store', 'Backend\PostController@store');

        Route::get('post.data', ['as' => 'post.data',
            'uses' => 'Backend\PostController@getPostByAttribute'
        ]);
    });

    Route::group(['prefix' => 'menu'], function () {
        Route::get('/', 'Backend\MenuController@index');
        Route::get('detail/{id}', 'Backend\MenuController@detail');
        Route::post('update', 'Backend\MenuController@update');
        Route::post('delete', 'Backend\MenuController@destroy');
        Route::post('store', 'Backend\MenuController@store');
        Route::post('update-state', 'Backend\MenuController@updateState');
    });

    Route::group(['prefix' => 'user'], function () {
        Route::get('list', 'Backend\UserController@index');

        Route::get('create', 'Backend\UserController@create');
        Route::get('create-investor', 'Backend\UserController@createInvestor');
        Route::post('store', 'Backend\UserController@store');
        Route::get('edit/{id}', 'Backend\UserController@edit');
        Route::get('delete/{id}', 'Backend\UserController@destroy');
        Route::post('edit/{id}', 'Backend\UserController@update');
        Route::post('update-inline/{id}', 'Backend\UserController@updateStatusUser');
        Route::get('user.data', ['as' => 'user.data',
            'uses' => 'Backend\UserController@getUserByAttribute'
        ]);
        Route::get('investor.data', ['as' => 'user.data',
            'uses' => 'Backend\UserController@getInvestorByAttribute'
        ]);
    });

    Route::group(['prefix' => 'investor'], function () {
        Route::get('list', 'Backend\UserController@indexInvestor');
        Route::get('create', 'Backend\UserController@create');
        Route::get('create-investor', 'Backend\UserController@createInvestor');
        Route::post('store', 'Backend\UserController@storeInvestor');
        Route::get('edit/{id}', 'Backend\UserController@edit');
        Route::post('edit/{id}', 'Backend\UserController@update');
        Route::post('update-inline/{id}', 'Backend\UserController@updateStatusUser');
        Route::get('user.data', ['as' => 'user.data',
            'uses' => 'Backend\UserController@getUserByAttribute'
        ]);
        Route::get('investor.data', ['as' => 'user.data',
            'uses' => 'Backend\UserController@getInvestorByAttribute'
        ]);


    });

    Route::group(['prefix' => 'settings'], function () {
        Route::get('slides', 'Backend\SettingController@listSlides');
        Route::get('list', 'Backend\SettingController@index');

        Route::get('testimonials', 'Backend\SettingController@listTestimonials');
        Route::get('testimonial/delete/{id}', 'Backend\SettingController@deleteTestimonial');
        Route::post('testimonial/store', 'Backend\SettingController@storeTestimonials');
        Route::post('slide/update/{id}', 'Backend\SettingController@updateSlide');
        Route::post('testimonial/update-inline/{id}', 'Backend\SettingController@updateInlineTestimonial');
        Route::post('update-inline/{id}', 'Backend\SettingController@updateInlineSetting');


        Route::get('user.data', ['as' => 'user.data',
            'uses' => 'Backend\UserController@getUserByAttribute'
        ]);
        Route::get('slide.data', ['as' => 'slide.data',
            'uses' => 'Backend\SettingController@getSlidesByAttribute'
        ]);
        Route::get('testimonial.data', ['as' => 'testimonial.data',
            'uses' => 'Backend\SettingController@getTestimonialsByAttribute'
        ]);
    });

    Route::group(['prefix' => 'category'], function () {
        Route::get('/', 'Backend\CategoryController@index');

        Route::post('store', 'Backend\CategoryController@store');
        Route::post('update/{id}', 'Backend\CategoryController@update');

        Route::get('category.data', ['as' => 'category.data',
            'uses' => 'Backend\CategoryController@getCategoryByAttribute'
        ]);
    });



    Route::group(['prefix' => 'contact'], function () {
        Route::get('get-file-contact/{id}', 'Backend\ContactController@getFile');
        Route::get('/', 'Backend\ContactController@index');
        Route::get('contact.data', ['as' => 'contact.data',
            'uses' => 'Backend\ContactController@getContactByAttribute'
        ]);
    });
});