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

Route::get('/login', function () {
    return view('login');
})->name('login');

// Auth::routes();

Route::get('/terms', 'HomeController@terms')->name('terms');
Route::get('{lang?}', 'HomeController@index')->name('home')->middleware('auth');

Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider')->name('redirect-provider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback')->name('handle-provider');

Route::get('api/search/{lang?}', 'ApiSearchController@index')->name('api');
Route::get('api/search-handle/{lang?}', 'ApiSearchController@handleSearch')->name('api-search');
