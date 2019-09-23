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


Route::get('/', 'ViewsController@home');
Route::get('/jadwal', 'ViewsController@jadwal');
Route::get('/lokasi', 'ViewsController@lokasi');
Route::get('/jdw', 'JadwalsController@index');
Route::get('/jdw/{jadwal}', 'JadwalsController@show');

