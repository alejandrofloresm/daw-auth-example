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

Route::group([
    'as' => 'panel.',
    'namespace' => 'Panel',
    'prefix' => 'panel'
], function() {
    Route::get('/register', 'UserController@register')->name('user.register');
    Route::post('/register', 'UserController@create')->name('user.create');
    Route::get('/logout', 'UserController@logout')->name('user.logout');
    Route::get('/signin', 'UserController@signin')->name('user.signin');

    Route::get('/', 'DashboardController@index')->name('dashboard.index');
});
