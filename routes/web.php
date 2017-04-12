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

Route::get('agenda', 'GuestController@agendaIndex');
Route::get('/agenda/{id}', [
    'as' => 'agenda.show',
    'uses' => 'GuestController@agendaDetail']);

Route::get('/repetitieschema', 'GuestController@rehearsalIndex');

Route::get('dirigent', function () {
    return view('dirigent');
});


Auth::routes();

//User routes

Route::get('downloads', function () {
    return view('downloads');
})->middleware('auth');
Route::get('downloadStatuten', 'DownloadController@downloadStatuten')->middleware('auth');
Route::get('downloadReglement', 'DownloadController@downloadReglement')->middleware('auth');

Route::get('/profiel', [
        'as' => 'user.edit',
        'uses' => 'ProfileController@edit'
    ])->middleware('auth');
Route::put('/profiel', [
        'as' => 'user.update',
        'uses' => 'ProfileController@update'
    ])->middleware('auth');


//Admin routes

Route::get('/admin/index', function () {
    return view('admin/index');
})->middleware('admin:admin');

Route::resource('admin/repetities', 'rehearsalController');
Route::resource('/admin/agenda', 'AgendaController');

Route::resource('/admin/users', 'UserController');