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

// Show 'add password' page
Route::get('/password/add', function () {
    return view('add');
});

// Show 'password generator' page
Route::get('/password/generator', function () {
    return view('generator');
});

// Show 'password hint' page
Route::get('/password/hint', function () {
    return view('hint');
});

Auth::routes();

Route::post('/register', 'RegisterController@store')->name('register');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'PasswordsController@store')->name('add');
Route::get('/home/delete', 'PasswordsController@destroy')->name('home');