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

Route::get('/', 'SessionController@create');
Route::post('/', 'SessionController@store');

//Route::get('/admin/dashboard', 'LoginController@dashboard');

Route::group(['prefix' => 'session'], function() {
	Route::get('login', 'SessionController@create');
	Route::post('login', 'SessionController@store');
	Route::get('logout', 'SessionController@logout');

});

Route::group(['prefix' => 'admin', 'middleware' => 'sentinel-auth:super-admin'], function() {
    Route::group(['prefix' => 'panel'], function() {
        Route::get('dashboard', 'Admin\DashboardController@index');
        Route::get('school/index', 'Admin\SchoolController@index');
        Route::get('teacher/index', 'Admin\TeacherController@index');
        Route::get('attendance/index', 'Admin\AttendanceController@index');
    });
});

Route::group(['prefix' => 'dpeo'], function() {
    Route::group(['prefix' => 'panel'], function() {
        Route::get('dashboard', 'Dpeo\DashboardController@index');
        Route::get('school/index', 'Dpeo\SchoolController@index');
        Route::get('teacher/index', 'Dpeo\TeacherController@index');
        Route::get('attendance/index', 'Dpeo\AttendanceController@index');
    });
});

Route::group(['prefix' => 'adpeo'], function() {
    Route::group(['prefix' => 'panel'], function() {
        Route::get('dashboard', 'Adpeo\DashboardController@index');
        Route::get('school/index', 'Adpeo\SchoolController@index');
        Route::get('teacher/index', 'Adpeo\TeacherController@index');
        Route::get('attendance/index', 'Adpeo\AttendanceController@index');
    });
});

Route::group(['prefix' => 'teo'], function() {
    Route::group(['prefix' => 'panel'], function() {
        Route::get('dashboard', 'Teo\DashboardController@index');
        Route::get('school/index', 'Teo\SchoolController@index');
        Route::get('teacher/index', 'Teo\TeacherController@index');
        Route::get('attendance/index', 'Teo\AttendanceController@index');
    });
});

Route::group(['prefix' => 'ateo'], function() {
    Route::group(['prefix' => 'panel'], function() {
        Route::get('dashboard', 'Ateo\DashboardController@index');
        Route::get('school/index', 'Ateo\SchoolController@index');
        Route::get('teacher/index', 'Ateo\TeacherController@index');
        Route::get('attendance/index', 'Ateo\AttendanceController@index');
    });
});

Route::group(['prefix' => 'teacher'], function() {
    Route::group(['prefix' => 'panel'], function() {
        Route::get('dashboard', 'Teacher\DashboardController@index');
        Route::get('school/index', 'Teacher\SchoolController@index');
        Route::get('teacher/index', 'Teacher\TeacherController@index');
        Route::get('attendance/index', 'Teacher\AttendanceController@index');
    });
});

Route::get('/unauthorized', function () {
    return view('errors.401');
});