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

Route::get('/admin', function(){
    echo "Hello Admin";
    return view('welcome');
})->middleware('auth','admin');

Route::get('/company', function(){
    echo "Hello Company representative";
    return view('welcome');
})->middleware('auth','company');

Route::get('/customer', function(){
    echo "Hello Customer";
    return view('welcome');
})->middleware('auth','customer');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
