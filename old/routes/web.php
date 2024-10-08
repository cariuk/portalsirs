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


Route::get('portal','Auth\LoginController@showLoginForm')->name('portal');
Route::post('portal','Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['middleware' => 'auth'],function() {
    Route::get('portal/home', 'Portal\HomeController@index')->name('home');

    Route::get('portal/notif', 'Portal\NotifController@index')->name('notif');
    Route::get('portal/notif/loaddata', 'Portal\NotifController@loaddata')->name('notif-load');
    Route::get('portal/notif/form', 'Portal\NotifController@akun')->name('notif-akun');
    Route::post('portal/notif/form/simpan', 'Portal\NotifController@store_akun')->name('notif-akun-simpan');

    Route::get('portal/akun', 'Portal\AkunController@index')->name('akun');
    Route::get('portal/akun/loaddata', 'Portal\AkunController@loaddata');

    Route::get('portal/dokter', 'Portal\DokterController@index')->name('dokter');
    Route::get('portal/dokter/loaddata', 'Portal\DokterController@loaddata');
    Route::get('portal/dokter/akun', 'Portal\DokterController@akun')->name('dokter-akun');
    Route::post('portal/dokter/akun/simpan', 'Portal\DokterController@store_akun')->name('dokter-akun-simpan');

    Route::get('portal/jadwal', 'Portal\JadwalPraktekController@index')->name('jadwal');
});
