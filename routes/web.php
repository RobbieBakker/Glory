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

//Route::resource('agenda', 'ShowAgendaController');
Route::resource('/admin/agenda', 'AgendaController');

Route::get('dirigent', function () {
    return view('dirigent');
});

Route::get('/repetitieschema', 'RepetitieController@rehearsals');
Route::delete('/repetitieschema/{id}', [
    'as' => 'rehearsal.destroy',
    'uses' => 'RepetitieController@destroy'
])->middleware('auth');


Route::get('downloads', function () {
    return view('downloads');
})->middleware('auth');
Route::get('downloadStatuten', 'DownloadController@downloadStatuten')->middleware('auth');


Route::get('/admin/index', function () {
    return view('admin/index');
})->middleware('auth');

Route::get('/profiel', [
        'as' => 'user.edit',
        'uses' => 'ProfileController@edit'
    ])->middleware('auth');
Route::put('/profiel', [
        'as' => 'user.update',
        'uses' => 'ProfileController@update'
    ])->middleware('auth');

Auth::routes();