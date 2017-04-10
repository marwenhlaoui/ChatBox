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
Route::get('/','HomeController@index')->name('home');
Route::get('/home','HomeController@news')->name('news');
Route::get('/users','HomeController@users')->name('users'); 
Route::get('api/users','ApiController@users')->name('api.users');
Route::get('message','TChatBox\PrivedController@index')->name('message');
Route::get('message/{slug}','TChatBox\PrivedController@box')->name('message.box');
Route::post('send/{id}','TChatBox\PrivedController@send')->name('message.send');