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

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('home');
    })->name('homepage');

    Route::get('/verify', 'Auth\CustomVerificationController@show')->name('verify');
});

Route::group(['prefix' => 'admin', 'middleware' => ['web']], function () {
    Route::get('/users', 'Admin\UserController@index')->name('admin.user.index');
    Route::get('/users/import', 'Admin\UserController@showUserImport')->name('admin.user.showUserImport');
    Route::post('/users/import', 'Admin\UserController@importUser')->name('admin.user.importUser');
});

Route::get('/home', function () {
    return redirect('/', 'Admin\UserController@list');
});

Auth::routes();
