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
//Route::get('/login_', function () {
//    return view('auth.loginview');
//});




Auth::routes();
Route::get('/', 'AwalController@index');
Route::get('/sewa', 'SewaController@index');
Route::get('/cuacawelcome', 'CuacaAwalController@index');
Route::get('/sewasepedawelcome', 'SewaSepedaController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/homepage', 'EventController@index')->name('user.homepage');
Route::get('/pemesanan/{id}', 'PemesananController@index');
Route::get('/pesan_tiket/{id_event}', 'PemesananController@store');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/editprofil', 'ProfilController@edit_profil');
    Route::patch('/editprofil', 'ProfilController@update_profil');
});

Route::get('/tiket', 'TiketController@index');


//Admin
Route::get('/admin/login', 'Auth\AdminLoginController@ShowLoginForm')->middleware('guest');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin-login');
Route::get('/admin/dashboard', 'AdminController@index')->name('admin.dashboard');

Route::get('/admin/tabel_pengguna','TabelPenggunaController@index');
Route::get('/admin/hapus_pengguna/{id}','TabelPenggunaController@hapus');

Route::get('/admin/tabel_event','TabelEventController@index');
Route::get('/admin/tambahevent','TabelEventController@create');
Route::post('/admin/store_event','TabelEventController@store');
Route::get('/admin/editevent/{id}','TabelEventController@edit');
Route::post('/admin/update','TabelEventController@update');
Route::get('/admin/hapus/{id}','TabelEventController@hapus');

Route::get('/admin/tabel_tiket','TabelTiketController@index');

Route::get('/admin/tabel_penyewa','TabelPenyewaController@index');

Route::get('/admin/tabel_sepeda','TabelSepedaController@index');
Route::get('/admin/tambahsepeda','TabelSepedaController@create');
Route::post('/admin/store_sepeda','TabelEventController@store');
