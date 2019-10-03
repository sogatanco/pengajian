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
Route::get('/admin', 'HomeController@index')->name('admin');
Route::post('/admin', 'HomeController@store')->name('admin');
Route::get('/admin/aktif', 'HomeController@aktif');
Route::get('/admin/exp', 'HomeController@lewat');
Route::get('/admin/add', 'HomeController@create');

Route::get('/', 'ViewsController@home');
Route::get('/jadwal', 'ViewsController@jadwal');
Route::get('/lokasi', 'ViewsController@lokasi');
Route::get('/about', 'ViewsController@about');
// json
Route::get('/api/all', 'ViewsController@jsonAll');
Route::get('/api/aktif', 'ViewsController@jsonActive');

// detail
Route::get('/{jadwal}', 'ViewsController@detail');

// admin
Route::delete('/{jadwal}', 'HomeController@destroy');
Route::get('/{jadwal}/edit', 'HomeController@edit');
Route::patch('/{jadwal}', 'HomeController@update');





