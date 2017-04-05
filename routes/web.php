<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


if(config('app.env') == 'local') {
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}

/**
*  Main home page visitors see when they visit just /
*/
Route::get('/', 'pswdGenController@show');

/**
*  /pswdgen
*/
Route::get('/pswdgen', 'pswdGenController@show');

/**
*  GenPass /pswdgen
*/
Route::post('/pswdgen', 'pswdGenController@GenPass');

/**
*  Random Passsword generator page /randGen
*/
Route::get('/RGen', 'randGenController@show');

/**
*  GenPass /RGen
*/
Route::post('/RGen', 'randGenController@GenPass');

