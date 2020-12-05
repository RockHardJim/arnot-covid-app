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

Route::get('/', 'Front\SiteController@index')->name('home');
Route::get('/login', 'Front\SiteController@login')->name('login')->middleware('guest');
Route::get('/register', 'Front\SiteController@register')->name('register')->middleware('guest');
Route::get('/app', 'Front\SiteController@dashboard')->name('dashboard')->middleware('auth');
Route::get('/app/checkin/{step}', 'Front\CheckinController@checkin')->name('checkin');
Route::get('/app/checkedin/{token}', 'Front\CheckinController@checkedin')->name('checkedin')->middleware('auth');
Route::get('/tracker', 'Front\SiteController@tracker')->name('tracker')->middleware('auth');
Route::get('/guidelines', 'Front\SiteController@guidelines')->name('guidelines')->middleware('auth');

Route::group(['prefix' => 'ajax'], function () {
    /* Backend Auth Routes */
    Route::post('/login', 'Ajax\AuthController@login')->name('ajax.login')->middleware('guest');
    Route::post('/register', 'Ajax\AuthController@register')->name('ajax.register')->middleware('guest');
    Route::post('/answer', 'Ajax\QuizController@answer')->name('ajax.answer')->middleware('auth');
    /* End of Backend Auth Routes */
});