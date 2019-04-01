<?php

Route::get('/', function () {
    return view('index');
})->name('index');

Auth::routes();

Route::get('/login', 'HomeController@index')->name('login');

Route::get ('/home', function () {
    Auth::logout();
    return view('auth.login');
})->name('home');

Route::match(['get', 'post'], '/admin/form/update', '\\' . \App\Http\Controllers\formActionController::class)->name('form-action-update');

