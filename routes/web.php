<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');

Route::get('/map', 'MapController@index')->name('map');

Route::get('/pond/list', 'PondController@list')->name('pond.list');
Route::get('/pond/add', 'PondController@viewadd')->name('pond.add');
Route::post('/pond/add', 'PondController@add');

Route::get('/schedule/list', 'ScheduleController@index')->name('schedule.list');
Route::get('/schedule/add', 'ScheduleController@index')->name('schedule.add');
