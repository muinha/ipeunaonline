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
// Site Routes
Route::get('/', 'SiteController@index');
Route::get('news', 'SiteController@news');
Route::get('post/{id}', 'SiteController@post');
Route::get('login', 'SiteController@login');
Route::get('cadastro', 'SiteController@register');

// Authentication Routes...
Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// Admin Users
Route::get('admin', 'AdminController@index')->name('home');
Route::get('admin/users/hierarquia/create', 'AdminController@hierarquiaUsersCreate');
Route::post('admin/users/hierarquia/create', 'AdminController@postHierarquiaUsersCreate');
Route::get('admin/users/create', 'AdminController@userCreate');
Route::post('admin/users/create', 'AdminController@postUserCreate');
Route::get("admin/user/update", "AdminController@userUpdate");
Route::post("admin/user/update", "AdminController@postUserUpdate");
Route::get('admin/users/{id}/update', 'AdminController@usersUpdate');
Route::post('admin/users/{id}/update', 'AdminController@postUsersUpdate');
Route::get('admin/users/{id}/delete', 'AdminController@usersDelete');
Route::get('admin/users', 'AdminController@users');

// Admin News

Route::get('admin/news', 'AdminNewsController@news');
Route::get('admin/news/create', 'AdminNewsController@newsCreate');
Route::post('admin/news/create', 'AdminNewsController@store');
Route::get('admin/news/{id}/update', 'AdminNewsController@newsUpdate');
Route::post('admin/news/{id}/update', 'AdminNewsController@update');
Route::get('admin/news/{id}/delete', 'AdminNewsController@delete');
Route::get('admin/news/categories', 'CategoryNewsController@newsCategory');
Route::get('admin/news/categories/create', 'CategoryNewsController@newsCategoryCreate');
Route::post('admin/news/categories/create', 'CategoryNewsController@postNewsCategoryCreate');
Route::get('admin/categories/news', 'CategoryNewsController@categoryNews');
