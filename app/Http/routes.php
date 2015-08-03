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
    return view('site.index');
});

Route::get('keyboards', function () {
    return view('site.keyboards');
});

Route::get('buy', function () {
    return view('site.buy');
});

Route::get('switches', function () {
    return view('site.switches');
});

Route::get('faqs', function () {
    return view('site.faqs');
});
