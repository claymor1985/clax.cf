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
    return view('welcome', ['text' => 'Laravel 5 Welcome!']);
});

Route::get('/test', function () {
  return view('welcome', ['text' => 'TEST CLEAN URLS']);
});

Route::controller('a_test', 'ATestController');