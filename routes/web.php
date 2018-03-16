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

Route::get('webinfo', function () {
    return view('webinfo');
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
Route::post('/changePassword','ProfileController@changePassword')->name('changePassword');

//User routes

Route::get('downloads', function () {
    return view('downloads');
})->middleware('auth');
Route::get('downloadStatuten', 'DownloadController@downloadStatuten')->middleware('auth');
Route::get('downloadReglement', 'DownloadController@downloadReglement')->middleware('auth');
Route::get('downloadNieuwsbrief', 'DownloadController@downloadNieuwsbrief')->middleware('auth');

Route::get('/profiel', [
        'as' => 'user.edit',
        'uses' => 'ProfileController@edit'
    ])->middleware('auth');
Route::put('/profiel', [
        'as' => 'user.update',
        'uses' => 'ProfileController@update'
    ])->middleware('auth');
Route::post('/avatar', 'ProfileController@updateAvatar');


//Admin routes

Route::get('/admin/index', function () {
    return view('admin/index');
})->middleware('admin:admin');

Route::resource('admin/repetities', 'rehearsalController')->middleware('admin:admin');
Route::resource('/admin/agenda', 'AgendaController')->middleware('admin:admin');

Route::resource('/admin/users', 'UserController')->middleware('admin:admin');
Route::put('/admin/users/deleteAvatar/{id}', 'UserController@deleteAvatar')->middleware('admin:admin');

Route::get('admin/nieuwsbrief', 'NewsletterController@index')->middleware('admin:admin');
Route::post('admin/nieuwsbrief', 'NewsletterController@updateNewsletter')->middleware('admin:admin');

Route::get('admin/history', 'HistoryController@index')->middleware('admin:admin');