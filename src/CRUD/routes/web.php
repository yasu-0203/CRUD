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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/userprofile', 'UserController@show')->name('userprofile');
Route::put('/userprofile', 'UserController@update')->name('userprofile.update');

Route::get('/calendar/index', 'CalendarController@index')->name('calendar.index');

Route::get('/event/index', 'EventController@index')->name('event.index');



