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
        Route::get('attendance/present', 'Admin\AttendanceController@index');
        Route::get('attendance/absent', 'Admin\AttendanceController@absent');
    });
});

Route::group(['prefix' => 'dpeo', 'middleware' => 'sentinel-auth:dpeo'], function() {
    Route::group(['prefix' => 'panel'], function() {
        Route::get('dashboard', 'Dpeo\DashboardController@index');
        Route::get('school/index', 'Dpeo\SchoolController@index');
        Route::get('teacher/index', 'Dpeo\TeacherController@index');
        Route::get('attendance/present', 'Dpeo\AttendanceController@index');
        Route::get('attendance/absent', 'Dpeo\AttendanceController@absent');
    });
});

Route::group(['prefix' => 'adpeo', 'middleware' => 'sentinel-auth:adpeo'], function() {
    Route::group(['prefix' => 'panel'], function() {
        Route::get('dashboard', 'Adpeo\DashboardController@index');
        Route::get('school/index', 'Adpeo\SchoolController@index');
        Route::get('teacher/index', 'Adpeo\TeacherController@index');
        Route::get('attendance/present', 'Adpeo\AttendanceController@index');
        Route::get('attendance/absent', 'Adpeo\AttendanceController@absent');
    });
});

Route::group(['prefix' => 'teo', 'middleware' => 'sentinel-auth:teo'], function() {
    Route::group(['prefix' => 'panel'], function() {
        Route::get('dashboard', 'Teo\DashboardController@index');
        Route::get('school/index', 'Teo\SchoolController@index');
        Route::get('teacher/index', 'Teo\TeacherController@index');
        Route::get('attendance/present', 'Teo\AttendanceController@index');
        Route::get('attendance/absent', 'Teo\AttendanceController@absent');
    });
});

Route::group(['prefix' => 'ateo', 'middleware' => 'sentinel-auth:ateo'], function() {
    Route::group(['prefix' => 'panel'], function() {
        Route::get('dashboard', 'Ateo\DashboardController@index');
        Route::get('school/index', 'Ateo\SchoolController@index');
        Route::get('teacher/index', 'Ateo\TeacherController@index');
        Route::get('attendance/present', 'Ateo\AttendanceController@index');
        Route::get('attendance/absent', 'Ateo\AttendanceController@absent');
    });
});

Route::group(['prefix' => 'teacher', 'middleware' => 'sentinel-auth:teacher'], function() {
    Route::group(['prefix' => 'panel'], function() {
        Route::get('dashboard', 'Teacher\DashboardController@index');
        Route::get('school/index', 'Teacher\SchoolController@index');
        Route::get('teacher/index', 'Teacher\TeacherController@index');
        Route::get('attendance/present', 'Teacher\AttendanceController@index');
        Route::get('attendance/absent', 'Teacher\AttendanceController@absent');
    });
});

Route::get('/unauthorized', function () {
    return view('errors.401');
});