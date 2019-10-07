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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/become-ntc', 'HomeController@become')->name('become');

Route::get('/take-action', 'HomeController@take')->name('take');
Route::get('/empower', 'HomeController@empower')->name('empower');
Route::get('/hero', 'HomeController@hero')->name('hero');

Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/cj', 'HomeController@cj')->name('cj');
Route::get('/sponsor', 'HomeController@sponsor')->name('sponsor');
