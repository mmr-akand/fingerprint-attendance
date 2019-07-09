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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'LoginController@testGet');
Route::post('/', 'LoginController@testPost');

//Route::get('/admin/dashboard', 'LoginController@dashboard');

Route::group(['prefix' => 'session'], function() {
	Route::get('login', 'SessionController@create');
	Route::post('login', 'SessionController@store');
	Route::get('logout', 'SessionController@logout');

});

Route::group(['prefix' => 'admin', 'middleware' => 'sentinel-auth:super-admin'], function() {
    Route::get('dashboard', 'Admin\DashboardController@index');
});

Route::group(['prefix' => 'dpeo'], function() {
    Route::group(['prefix' => 'panel'], function() {
        Route::get('dashboard', 'Dpeo\DashboardController@index');
    });
});

Route::group(['prefix' => 'adpeo'], function() {
    Route::group(['prefix' => 'panel'], function() {
        Route::get('dashboard', 'Adpeo\DashboardController@index');
    });
});

Route::group(['prefix' => 'teo'], function() {
    Route::group(['prefix' => 'panel'], function() {
        Route::get('dashboard', 'Teo\DashboardController@index');
    });
});

Route::group(['prefix' => 'ateo'], function() {
    Route::group(['prefix' => 'panel'], function() {
        Route::get('dashboard', 'Ateo\DashboardController@index');
    });
});

Route::group(['prefix' => 'teacher'], function() {
    Route::group(['prefix' => 'panel'], function() {
        Route::get('dashboard', 'Teacher\DashboardController@index');
    });
});

Route::get('/unauthorized', function () {
    return view('errors.401');
});