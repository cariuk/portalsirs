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

Route::group(['namespace' => 'Klaim','prefix' => 'klaim'], function () {
    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('/', 'DashboardController@index')->name('dashboard');
        Route::get('/loaddata', 'DashboardController@getData')->name('dashboard.loaddata');
        Route::get('/tagihan ', 'DashboardController@getTagihan')->name('dashboard.tagihan');
    });
});
