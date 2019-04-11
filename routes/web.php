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
    Route::get('/verify', 'Auth\CustomVerificationController@show')->name('verify')->middleware('role:user');
    Route::get('/', function () {
        return view('home');
    })->name('homepage');

});

Route::get('/admin/login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Admin\Auth\LoginController@login');
Route::post('/admin/logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');

Route::group(['prefix' => 'admin', 'middleware' => ['web', 'admin']], function () {
    Route::get('/users', 'Admin\UserController@index')->name('admin.users.index');

    Route::get('/users/import', 'Admin\UserController@showUserImport')->name('admin.users.showUserImport');
    Route::post('/users/import', 'Admin\UserController@importUser')->name('admin.users.importUser');
    Route::get('/users/{id?}', 'Admin\UserController@show')->name('admin.users.show');

    Route::get('/admins', 'Admin\AdminController@index')->name('admin.admins.index');
    Route::get('/admins/create', 'Admin\AdminController@create')->name('admin.admins.create');
});

Route::get('/home', function () {
    return redirect('/');
});

Auth::routes();
