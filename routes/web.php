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

<<<<<<< HEAD
/**
*  Book related routes
*/
Route::get('/books', 'BookController@index');

Route::get('/books/{titile?}', 'BookController@view');

if(config('app.env') == 'local') {
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}

/**
*  Practice
*/
Route::any('/practice/{n?}', 'PracticeController@index');

/**
*  Main home page visitors see when they visit just /
*/
Route::get('/', 'WelcomeController');
=======
Route::get('/', function () {
    return view('welcome');
});
>>>>>>> c39a16ac38cc9b5405c50dee2f1959debc83fa36
