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

Auth::routes();

Route::get('/', [
   "uses" => "BlogController@index",
]);

Route::get('/detail/{id}', [
   "uses" => "BlogController@show",
]);

Route::get('/about', function () {
    return view('blog/about');
});

Route::get('/contact', function () {
    return view('blog/contact');
});

Route::get('/dashboard/add', function () {
    return view('posts/add');
});

Route::get('/dashboard/list', function () {
    return view('posts/list');
});

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
