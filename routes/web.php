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
Route::get('/admin', 'AdminController');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'EventController@index');
Route::get('/events/create', 'EventController@create');
Route::post('/events', 'EventController@store');
Route::get('/events/{event}', 'EventController@show');
Route::get('/events/myevents', 'EventController@indexByUser');


Route::post('/events/{event}/keywords', 'KeywordController@store');