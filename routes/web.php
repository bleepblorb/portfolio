<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/resume', function () {
    return view('resume');
})->name('resume');

// Route::get('/resume/new', "ResumeController@getFresh");

Route::post('/img/portrait', 'ImageController@portrait');


// Style Guide

Route::get('/styles', function () {
    return view('styles');
});

Route::get('/styles/{style}', function ($style) {
      $data = compact('style');
      if (View::exists('styles.'.$style)) {
        return view('styles')->with($data);
      }
      else {
        return view('styles');
      }
})->name('style');
