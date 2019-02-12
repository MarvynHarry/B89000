<?php
Route::get('/', function () {
    return view('auth.login');
});

Route::post('login','Auth\LoginController@login')->name('login');
Route::post('dashboard','Auth\DashboardController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
