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

Route::get('/top', 'TopController@top')->name('top');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/mentee/register', 'MenteeController@mentee_register')->name('mentee.register');
Route::get('/mentee/register-confirm', 'MenteeController@mentee_register_confirm')->name('mentee.register_confirm');


Route::get('/chat', 'ChatController@index')->name('chat')->middleware('auth');
