<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::get('/resume/new', "ResumeController@getFresh");
Route::get('/resume/open', "ResumeController@open");
Route::match(['get', 'post'], '/resume/default', "ResumeController@getDefault");
Route::patch('/resume', "ResumeController@save");
