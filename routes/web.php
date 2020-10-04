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

Route::get('/', 'MainController@home')->name('app');;

Route::get('/contact', 'MainController@contact')->name("contact");

Route::get('/about', 'MainController@about')->name('about');

Route::get('/add', 'MainController@add')->name('add');

Route::get('/reg', 'MainController@regUser')->name('registration');

Route::get('/autorization', 'MainController@admin')->name('autorization');

Route::post('/add/check', 'MainController@review_check')->name('add/check');

Route::get('/search', 'MainController@search')->name('search');

