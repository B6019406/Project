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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add', function () {
    return view('add');
});

Route::get('/generator', function () {
    return view('generator');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/add', array('uses'=>'PasswordsController@create'))->name('add');