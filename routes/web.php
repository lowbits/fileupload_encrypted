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

Route::get('/', 'FilesController@index');

Route::get('/upload', 'FilesController@Create');

Route::post('api/files/upload', 'FilesController@addFile');
Route::post('api/files/addUpload', 'FilesController@addUpload');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
