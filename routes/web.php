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


Route::get('/', 'HomeController@show');
Route::get('/login', 'LoginController@show');
Route::post('logincheck','LoginController@check');
Route::get('/register', 'RegisterController@show');
Route::post('/registeraccount','RegisterController@register');
Route::get('/list-jasa', 'ListJasaController@show');

Route::get('/logout','LoginController@logout');

Route::get('/listorderan','OrderController@buyer');


Route::get('/home', 'HomeController@index')->name('home');
