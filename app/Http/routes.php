<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('room', function () {
    return view('pages.room');
});

Route::get('contact', function () {
    return view('pages.contact');
});

Route::get('gallery', function () {
    return view('pages.gallery');
});

Route::get('booking', function () {
    return view('pages.booking');
});
