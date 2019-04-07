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

    Route::get('/admin/login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/admin/login', 'Admin\Auth\LoginController@login');
    Route::get('/verify', 'Auth\CustomVerificationController@show')->name('verify');
    Route::get('/', function () {
        return view('home');
    })->name('homepage');
});

Route::group(['prefix' => 'admin', 'middleware' => ['web']], function () {
    Route::get('/users', 'Admin\UserController@index')->name('admin.user.index');

    Route::get('/users/import', 'Admin\UserController@showUserImport')->name('admin.users.showUserImport');
    Route::post('/users/import', 'Admin\UserController@importUser')->name('admin.users.importUser');

    Route::get('/admins', 'Admin\AdminController@index')->name('admin.admins.index');
    Route::get('/admins/create', 'Admin\AdminController@create')->name('admin.admins.create');
});

Route::get('/home', function () {
    return redirect('/');
});

Auth::routes();
