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
        Route::get('/sep', 'DataController@getSEP')->name('data.sep');
        Route::get('/tagihan', 'DataController@getTagihan')->name('data.tagihan');
        Route::get('/individual', 'DataController@getLembarIndividual')->name('data.individual');
    });

    Route::group(['prefix' => 'laboratorium'], function () {
        Route::get('/', 'LaboratoriumController@index')->name('laboratorium');
        Route::get('/loaddata', 'LaboratoriumController@getData')->name('laboratorium.loaddata');
        Route::get('/cetak', 'LaboratoriumController@getReport')->name('laboratorium.report');
    });

    Route::group(['prefix' => 'radiologi'], function () {
        Route::get('/', 'RadiologiController@index')->name('radiologi');
        Route::get('/loaddata', 'RadiologiController@getData')->name('radiologi.loaddata');
        Route::get('/cetak', 'RadiologiController@getReport')->name('radiologi.report');
    });

    Route::group(['prefix' => 'berkas'], function () {
        Route::get('/', 'BerkasController@index')->name('berkas');
        Route::get('/loaddata', 'BerkasController@getData')->name('berkas.loaddata');
        Route::get('/file', 'BerkasController@getFile')->name('berkas.file');
        Route::get('/zip', 'BerkasController@getZip')->name('berkas.zip');
    });

    Route::group(['prefix' => 'laporanoperasi'], function () {
        Route::get('/', 'LaporanOperasiController@index')->name('operasi');
        Route::get('/loaddata', 'LaporanOperasiController@getData')->name('operasi.loaddata');
        Route::get('/cetak', 'LaporanOperasiController@getReport')->name('operasi.report');
    });

    Route::group(['prefix' => 'generate'], function () {
        Route::get('/', 'GeneratePdfBerkasKlaimController@index')->name('klaim.generate.pdf');
    });
});
