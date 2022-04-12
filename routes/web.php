<?php

use Illuminate\Support\Facades\Route;

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




Route::get('/logout', 'UserController@logout')->name('logout')->middleware('auth');

Route::group(['middleware' => 'admin'], function() {
    Route::get('/admin', 'AdminController@index')->name('admin.index');
    Route::get('/post/create', 'PostController@create')->name('posts.create');
    Route::post('/post/create', 'PostController@store')->name('posts.store');
    Route::get('/post/{id}/edit', 'PostController@edit')->name('post.edit');
    Route::put('/post/{id}/update', 'PostController@update')->name('post.store');
    Route::delete('/post/{id}/delete', 'PostController@delete')->name('post.delete');
});

Route::group(['middleware' => 'guest'], function() {
    Route::get('/register', 'UserController@create')->name('register.create');
    Route::post('/register', 'userController@store')->name('register.store');
    Route::get('/login', 'UserController@loginForm')->name('login.create');
    Route::post('/login', 'UserController@login')->name('login');
});

Route::get('/', 'HomeController@index')->name('index');
Route::get('/{id}', 'HomeController@show')->name('show');



//Route::get('/admin', 'AdminController@index')->name('admin.index')->middleware('admin');
