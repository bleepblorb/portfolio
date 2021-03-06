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

Route::get('/resume/{params?}', function () {
    return view('resume');
})->name('resume')->where('params', 'default');

Route::get('/visual-summary', function () {
    return view('visual-summary');
})->name('visuals');

Route::get('/about', function () {
    return view('about');
})->name('about');

// Route::get('/resume/new', "ResumeController@getFresh");

Route::post('/img/portrait', 'ImageController@portrait');

// projects
Route::get('/projects', function () {
  return view('project-index');
})->name('projects');


Route::get('/projects/archive', function () {
  return view('project-archive');
})->name('archive');

Route::get('/projects/{project}', function ($project) {
  $data = compact('style');
  if (View::exists('projects.'.$project)) {
    return view('projects.'.$project);
  }
  else {
    abort(404);
  }
});


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
