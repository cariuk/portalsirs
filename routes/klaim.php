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
    });
    Route::group(['prefix' => 'data'], function () {
        Route::get('/', 'DataController@index')->name('data');
        Route::get('/loaddata', 'DataController@getData')->name('data.loaddata');
        Route::get('/tagihan', 'DataController@getTagihan')->name('data.tagihan');
        Route::get('/individual', 'DataController@getLembarIndividual')->name('data.individual');
    });

    Route::group(['prefix' => 'laboratorium'], function () {
        Route::get('/', 'LaboratoriumController@index')->name('laboratorium');
        Route::get('/loaddata', 'LaboratoriumController@getData')->name('laboratorium.loaddata');
        Route::get('/cetak', 'LaboratoriumController@getReport')->name('laboratorium.report');
    });
});
