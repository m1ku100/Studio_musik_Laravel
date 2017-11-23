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

Auth::routes();

Route::get('/', 'SistumController@index')->name('dashboard');
Route::post('/contact', 'SistumController@postContact')->name('submit_contact');

Route::prefix('member')->group(function () {
    Route::get('{user}/settings', 'Auth\UserController@showAccountSettings');
    Route::put('{user}', 'Auth\UserController@updateAccount');
    Route::get('{user}/history', 'Auth\UserController@showOrderHistory');
    Route::get('{user}/history/print', 'Auth\UserController@printOrderHistory');
});