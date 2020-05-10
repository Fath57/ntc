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
use TCG\Voyager\Facades\Voyager;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/devenir-ntc', 'HomeController@become')->name('become');

Route::get('/s-impliquer', 'HomeController@take')->name('take');
Route::get('/education-citoyenne', 'HomeController@empower')->name('empower');
Route::get('/hero', 'HomeController@hero')->name('hero');

Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/cj', 'HomeController@cj')->name('cj');
Route::get('/cj/{slug}', 'HomeController@cjDetail')->name('cj.detail');
Route::get('/evenements/{slug}', 'HomeController@event')->name('event.detail');
Route::get('/sponsoriser', 'HomeController@sponsor')->name('sponsor');

Route::get('/actualite', 'HomeController@blog')->name('blog');
Route::get('/actualite/{slug?}', 'HomeController@blogDetail')->name('blog.detail');
Route::get('/user/{token}', 'HomeController@verifyUserEmail')->name('user.verify');

Route::post('ntc/register',['as'=>'ntc.register','uses'=>'HomeController@register']);
Route::get('ntc/inscription',['as'=>'ntc.inscription','uses'=>'HomeController@registerForm']);

Route::post('ntc/cj/login',['as'=>'cj.login','uses'=>'HomeController@loginCJ']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::get('module/{slug}/modules',['as'=>'module.courses','uses'=>"Voyager\VoyagerModuleController@course"]);
    Route::get('course/read/{slug}',['as'=>'courses.read','uses'=>"Voyager\VoyagerController@readCourse"]);
    Route::get('course/finish/{slug}',['as'=>'courses.finish','uses'=>"Voyager\VoyagerController@finishCourse"]);
    Route::get('module/pass-exam/{slug}',['as'=>'modules.exam','uses'=>"Voyager\VoyagerController@exam"]);
    Route::get('module/result-exam/{slug}',['as'=>'modules.exam.result','uses'=>"Voyager\VoyagerController@result"]);
    Route::get('module/result-certificate/{slug?}',['as'=>'modules.exam.certificate','uses'=>"Voyager\VoyagerController@getCertificate"]);
    Route::post('module/pass-exam/{slug}',['as'=>'modules.exam.pass','uses'=>"Voyager\VoyagerController@exam"]);
});
