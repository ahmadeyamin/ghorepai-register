<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/adddev', function () {
    return view('adddev');
})->name('adddev');

Route::get('/register-heros', function () {
    return view('deliveryhero');
})->name('register-heros');

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'BackendController@index')->name('home');
});
