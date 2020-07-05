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

Route::get('/', 'HomeController@index');
Route::get('/status', 'Homecontroller@index');
Route::post('/status', 'BuzDataExportItemController@retrieveBuzItems');

Route::get('file-upload', 'BuzDataExportItemController@fileUpload')->name('file.upload');
Route::post('file-upload', 'BuzDataExportItemController@fileUploadPost')->name('file.upload.post');
