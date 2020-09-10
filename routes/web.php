<?php

use App\User;
use Illuminate\Support\Facades\Route;
use App\Notifications\TestNotification;
use Illuminate\Support\Facades\Notification;


Route::get('/not', function () {
    $user = User::find(1);
    return Notification::route('Test','data')->notify(new TestNotification('Hello'));
    // return Notification::route('OneSignal','data')->notify(new TestNotification('Data From Not User'));
});


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
    Route::get('/home', 'BackendController@index')->name('admin');
});
