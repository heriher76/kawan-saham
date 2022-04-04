<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'FrontController@index')->name('home');

Route::get('/dashboard', 'User\DashboardController@index')->name('user.dashboard');

Route::get('/my-profile', 'User\ProfileController@index')->name('user.my-profile');

Route::put('/my-profile', 'User\ProfileController@update')->name('user.update-profile');

Route::get('/rekomendasi-saham', 'User\RekomendasiSahamController@index')->name('user.rekomendasi-saham');

Route::get('/rekomendasi-saham/{signal}', 'User\RekomendasiSahamController@getBySignal')->name('user.get-by-signal');

Route::get('/rekomendasi-saham/{signal}/{symbol}', 'User\RekomendasiSahamController@detailSaham')->name('user.detail-saham');

Route::get('/set-country/{code}', 'User\OptionController@setCountry')->name('user.setcountry');
