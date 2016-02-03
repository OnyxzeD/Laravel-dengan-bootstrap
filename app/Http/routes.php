<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Auth
Route::get('/', function () {
    return redirect('dashboard');

//    return bcrypt('admin');
});
Route::get('/login', function () {
    return view('partials.auth.login');
});

Route::group(['namespace' => 'Auth', 'prefix' => 'api/v1'], function () {
    // Authentication routes...
    Route::get('get-login', 'AuthController@getLogin');
    Route::get('post-login', 'AuthController@getLogin');
    Route::post('post-login', 'AuthController@postLogin');
    Route::get('logout', 'AuthController@getLogout');
});

Route::get('/dashboard', function () {
    return view('partials.content');
});

// Buku

Route::get('buku', 'BukuController@index');

Route::get('data-buku', 'BukuController@getData');

Route::get('buku/{id}', 'BukuController@show');

Route::get('create-buku', function () {
    return view('partials.buku.create');
});

Route::post('buku', 'BukuController@store');

Route::get('edit-buku/{id}', 'BukuController@edit');

Route::put('buku/{id}', 'BukuController@update');

Route::delete('buku/{id}', 'BukuController@destroy');

Route::get('hapus-buku/{id}', 'BukuController@destroy');

Route::post('/ajax-get', 'BukuController@ajaxGet');

// Anggota
Route::resource('anggota', 'AnggotaController');

Route::get('data-anggota', 'AnggotaController@getData');

Route::get('hapus-anggota/{id}', 'AnggotaController@destroy');

Route::get('edit-anggota/{id}', 'AnggotaController@edit');
