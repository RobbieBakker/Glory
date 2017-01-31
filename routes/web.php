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
    return view('index');
});

Route::get('info', function () {
    return view('over');
});

Route::get('bestuur', function () {
    return view('bestuur');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('agenda', function () {
    return view('agenda');
});

Route::get('dirigent', function () {
    return view('dirigent');
});

Route::get('repetitieschema', function () {
    return view('repetitieschema');
});

Route::get('agendatest', function () {
    return view('agenda2');
});

Route::get('downloads', function () {
    return view('downloads');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index');
