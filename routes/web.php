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

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
    Route::get('new_complain', 'ComplainsController@showForm');
    Route::get('view_complain', 'ComplainsController@displayComplains');
    Route::get('reply_complain/{case_number}', 'ComplainsController@replyToComplain');

    Route::post('new_complain', 'ComplainsController@store');
    Route::post('response_complain', 'ComplainsController@responseComplain');
});
