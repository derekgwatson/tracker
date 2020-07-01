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
    return view('showstatus', [
        'orderno' => '1008725.A', 
        'email' => 'jj@gmail.com',
        'customer' => 'Jacob Johns',
        'phone' => '02 6123 4545',
        'orderdate' => 'Sat 23 Apr 2020',
        'mobile' => '0412 345 345',
        ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
