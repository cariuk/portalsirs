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
if (env("PROXY_REVERSE",false)){
    $app_url = config("app.url");
    if (!empty($app_url)) {
        URL::forceRootUrl($app_url);
        $schema = explode(':', $app_url)[0];
        URL::forceScheme($schema);
    }
}

Route::get('instansi', 'Home\InstansiController@getData')->name("instansi");

Route::get('images/{filename}', function ($filename) {
    $path = storage_path('app/public/images/' . $filename);
    if (!File::exists($path)) {
        abort(404);
    }
    $file = File::get($path);
    $type = File::mimeType($path);
    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response;
})->name("images");

Route::get('reports/view/{path}/{filename}', function ($path, $filename) {
    $path = storage_path('app/public/' . $path . '/' . \Illuminate\Support\Facades\Crypt::decryptString($filename));
    if (!File::exists($path)) {
        abort(404);
    }

    return response()->file($path);
})->name("reports.view");

Route::get('reports/{path}/{filename}', function ($path, $filename) {
    $path = storage_path('app/public/' . $path . '/' . \Illuminate\Support\Facades\Crypt::decryptString($filename));
    if (!File::exists($path)) {
        abort(404);
    }

    return response()->download($path);
})->name("reports");

Route::group(['namespace' => 'Auth'], function () {
    Route::get('/', 'LoginController@showLoginForm')->name('login');
    Route::post('/login', 'LoginController@login');
    Route::middleware('auth')->post('/logout', 'LoginController@logout')->name('logout');
});

Route::group(['namespace' => 'Home', 'middleware' => 'auth'], function () {
    Route::get('main', 'MainController@index')->name('main');
    Route::get('main/load/{module}', 'MainController@loadModul')->name('main.load.module');

});
