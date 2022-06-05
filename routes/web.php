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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('User.home');
});


Route::get('/dashboard', function () {
    return view('admin.index2');
})->name('dashboard');


Route::get('/login', 'LoginController@index')->name('login');
Route::get('/logout', function(){
    Auth::logout();
    return redirect('login')->with('toast_success',"Anda berhasil keluar dari aplikasi");;
})->name('logout');
Route::post('/loginuser', 'LoginController@loginuser')->name('loginuser');
Route::get('/register', 'LoginController@register')->name('register');
Route::post('/registeruser','LoginController@registeruser')->name('registeruser');
// Route::get('/lupapwd','LoginController@lupapwd')->name('lupapwd');
// Route::post('lupapwd/send','LoginController@lupapassword_send')->name('inilupapwd');

Route::get('/forgot_password','LoginController@forgot_pwd')->name('forgot-pwd');
Route::post('/forgot_password','LoginController@forgot_pwd_send')->name('forgot-pwd.send');

Route::get('/reset-password/{token}','LoginController@reset_password')->name('reset-password');
Route::post('/reset-password','LoginController@reset_password_send')->name('reset-password.send');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/profil', 'DashboardController@index')->name('profil');

// useradmin
Route::get('/userAdmin','UseradminController@index')->name('userAdmin');
Route::post('userAdmin','UseradminController@tambah')->name('tambah');
Route::post('/userAdmin/edit/{id}', 'UseradminController@update')->name('edit');
Route::get('/userAdmin/hapus/{id}', 'UseradminController@hapus')->name('hapus');

// produk exhibitor

Route::get('/produk', 'ProdukexhibitorController@index')->name('produk');
Route::get('/tambah', 'ProdukexhibitorController@tambah')->name('tambah');
