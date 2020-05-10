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
App::setLocale('ja');
Auth::routes();

Route::prefix('login')->name('login.')->group(function () {
  Route::get('/{provider}', 'Auth\LoginController@redirectToProvider')->name('{provider}');
  Route::get('/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->name('{provider}.callback');
});

Route::prefix('register')->name('register.')->group(function () {
  Route::get('/{provider}', 'Auth\RegisterController@showProviderUserRegistrationForm')->name('{provider}');
  Route::post('/{provider}', 'Auth\RegisterController@registerProviderUser');
});



Route::get('/', 'ThemeController@index')->name('themes.index');
Route::resource('/themes', 'ThemeController')->except('index', 'show')->middleware('auth');
Route::resource('/themes', 'ThemeController')->only(['show']);

// Route::resource('/{themes}/answers', 'AnswerController')->except('index', 'show' ,'edit' ,'update')->middleware('auth');
Route::resource('/{themes}/answers', 'AnswerController', [
    'only' => ['create', 'store', 'destroy']
])->middleware('auth');





