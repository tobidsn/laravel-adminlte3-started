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

Auth::routes();

Route::get('/dashboard/home', 'DashboardController@versionone')->name('home');
Route::get('/dashboard/v2', 'DashboardController@versiontwo')->name('v2');
Route::get('/dashboard/v3', 'DashboardController@versionthree')->name('v3');
Route::get('/dashboard/widget', 'DashboardController@widget')->name('widget');
Route::get('/chart/v1', 'DashboardController@charts')->name('chartv1');
Route::get('/chart/v2', 'DashboardController@flot')->name('chartv2');
Route::get('/chart/v3', 'DashboardController@inline')->name('chartv3');
Route::get('/ui/general', 'DashboardController@general')->name('general');
Route::get('/ui/icons', 'DashboardController@icons')->name('icons');
Route::get('/ui/buttons', 'DashboardController@buttons')->name('buttons');
Route::get('/ui/sliders', 'DashboardController@sliders')->name('sliders');
Route::get('/form/fgeneral', 'DashboardController@fgeneral')->name('fgeneral');
Route::get('/form/fadvanced', 'DashboardController@fadvanced')->name('fadvanced');
Route::get('/form/feditors', 'DashboardController@feditors')->name('feditors');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
