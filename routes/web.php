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

Route::get('/home', function ($id) {
   
    $user =  App\User::findOrFail($id);

    if($user->user_id == auth()->id()){
        return $passwords;
     }
    return $passwords;
  });

Route::get('/add', function () {
    return view('add');
});

Route::get('/password/generator', function () {
    return view('generator');
});

Route::get('/password/hint', function () {
    return view('hint');
});

Auth::routes();

Route::post('/register', 'RegisterController@store')->name('register');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/addaction', 'PasswordsController@store')->name('add');