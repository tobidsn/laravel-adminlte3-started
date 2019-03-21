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

Route::get('/', function () {
    return view('welcome');
});

Route::get('magic/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('magic/login', 'Auth\LoginController@login')->name('login');
Route::post('magic/logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['middleware' => 'has_any_role:admin', 'prefix' => 'magic', 'namespace' => 'Admin'], function() {
	Route::get('settings', 'SettingController@index');
    Route::post('settings', 'SettingController@update');
    Route::resource('users', 'UsersController');
    Route::get('userlist', 'UsersController@getdata');
    Route::get('useraction', 'UsersController@useraction');
});

Route::group(['middleware' => 'has_any_role:admin,editor', 'prefix' => 'magic', 'namespace' => 'Admin'], function() {
	Route::get('home', 'DashboardController@versionone');
	Route::get('profile', 'UsersController@profile');
	Route::patch('profile/{id}', 'UsersController@updateProfile');
	Route::get('terms_policy', 'SettingController@termpolicy');
    Route::post('terms_policy', 'SettingController@updatetp'); 
});