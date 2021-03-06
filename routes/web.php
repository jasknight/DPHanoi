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

Route::get('/admin/login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login')->middleware('guest:admin');
Route::post('/admin/login', 'Admin\Auth\LoginController@login');
Route::post('/admin/logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');

Route::group(['prefix' => 'admin', 'middleware' => ['web', 'admin']], function () {
    Route::get('/', function () {
        return view('admin.home');
    })->name('admin.homepage');
    
    Route::get('/users', 'Admin\UserController@index')->name('admin.users.index');
    Route::get('/users/import', 'Admin\UserController@showUserImport')->name('admin.users.showUserImport');
    Route::post('/users/import', 'Admin\UserController@importUser')->name('admin.users.importUser');
    Route::get('/users/export', 'Admin\UserController@showUserExport')->name('admin.users.showUserExport');
    Route::post('/users/export', 'Admin\UserController@exportUser')->name('admin.users.exportUser');
    Route::get('/users/create', 'Admin\UserController@showCreateForm')->name('admin.users.showUserCreateForm');
    Route::post('/users/create', 'Admin\UserController@createUser')->name('admin.users.createUser');
    Route::get('/users/{id}', 'Admin\UserController@show')->name('admin.users.show');
    Route::post('/users/approve/{id}', 'Admin\UserController@approve')->name('admin.users.approve');
    Route::post('/users/edit/{id}', 'Admin\UserController@edit')->name('admin.users.editUser');

    Route::get('/admins', 'Admin\AdminController@index')->name('admin.admins.index');
    Route::get('/admins/create', 'Admin\AdminController@create')->name('admin.admins.create');
    Route::post('/admins/register', 'Admin\Auth\RegisterController@create')->name('admin.admins.register');

    Route::get('/report', 'Admin\ReportController@all')->name('admin.report.all');
    Route::get('/detail', 'Admin\ReportController@detai')->name('admin.report.detail');

    Route::get('/news', 'Admin\NewsController@index')->name('admin.news.index');
    Route::get('/news/create', 'Admin\NewsController@create')->name('admin.news.create');
});

Route::get('/home', function () {
    return redirect('/');
});

Auth::routes();
