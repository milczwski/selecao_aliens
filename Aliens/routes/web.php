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

Route::get('/', 'Controller@login');
Route::get('login', 'Controller@login');
Route::post('login', 'UsersController@authenticateLogin');

Route::get('logout', 'Controller@logout');

Route::get('register', 'Controller@register');
Route::post('register', 'UsersController@insert');

Route::get('home','Controller@home');

Route::get('new_post', 'Controller@new_post');
Route::post('new_post','PostsController@insert');