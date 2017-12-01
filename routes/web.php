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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/edit', 'HomeController@edit')->name('edit');
Route::post('/edit', 'HomeController@update')->name('edit');

Route::get('/appointment', 'AppointmentController@index')->name('appointment');
