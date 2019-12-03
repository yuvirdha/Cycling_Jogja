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



Route::get('/masuk', function () {
    return view('masuk');
});


Auth::routes();
Route::get('/', 'AwalController@index');
Route::get('/sewa', 'SewaController@index');
Route::get('/cuacawelcome', 'CuacaAwalController@index');
Route::get('/sewasepedawelcome', 'SewaSepedaController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/homepage', 'EventController@index')->name('user.homepage');
Route::get('/pemesanan/{id}', 'PemesananController@index');
Route::get('/pesan_tiket/{id_event}', 'PemesananController@store');

//Admin
Route::get('/admin/login', 'Auth\AdminLoginController@ShowLoginForm')->middleware('guest');
Route::post('admin/login', 'Auth\AdminLoginController@login')->name('admin-login');
Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
Route::get('/tambahevent','AdminController@create');
Route::post('/tambahevent','AdminiController@store');

Route::get('/tiket', 'TiketController@index');