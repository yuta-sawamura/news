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

if (config('app.env') == 'production') {
    URL::forceScheme('https');
}

// ホーム
Route::get('/', 'NewsController@index');
Route::get('show/{news}', 'NewsController@show');

// 管理画面
Route::group(
    ['middleware' => 'auth'],
    function () {
        Route::prefix('admin')->group(function () {
            // お知らせ
            Route::get('/', 'Admin\NewsController@index');
            Route::get('create', 'Admin\NewsController@create');
            Route::post('store', 'Admin\NewsController@store');
            Route::get('show/{news}', 'Admin\NewsController@show');
            Route::get('edit/{news}', 'Admin\NewsController@edit');
            Route::post('update/{news}', 'Admin\NewsController@update');
            Route::get('delete/{news}', 'Admin\NewsController@delete');

            // ユーザー
            Route::prefix('user')->group(function () {
                Route::get('/', 'Admin\UserController@index');
                Route::get('create', 'Admin\UserController@create');
                Route::post('store', 'Admin\UserController@store');
                Route::get('show/{user}', 'Admin\UserController@show');
                Route::get('edit/{user}', 'Admin\UserController@edit');
                Route::post('update/{user}', 'Admin\UserController@update');
                Route::get('delete/{user}', 'Admin\UserController@delete');
            });
        });
    }
);

Auth::routes([
    'register' => false,
    'verify' => false,
    'confirm' => false
]);
Route::get('guest', 'Auth\LoginController@guestLogin')->name('guest.login');
