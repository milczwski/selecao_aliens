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


Route::get('register', function () {
    return view('register');
});

Route::get('home','PostsController@getAllPosts');
Route::post('home','PostsController@getAllPosts');

Route::get('new_post', function () {
    return view('new_post');
});

Route::post('new_post', function () {
    return view('new_post');
});