<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('pesan/{id}', 'PesanController@index');
Route::post('pesan/{id}', 'PesanController@pesan');
Route::get('check-out', 'PesanController@check_out');
Route::delete('check-out/{id}', 'PesanController@delete');
Route::get('konfirmasi-check-out', 'PesanController@konfirmasi');
Route::get('profile', 'ProfileController@index');
Route::post('profile', 'ProfileController@update');
Route::get('history', 'HistoryController@index');
Route::get('history/{id}', 'HistoryController@detail');

// Route::resource('artikel', 'ArticleController');
Route::get('/artikel', 'ArticleController@index');
Route::get('/artikel/create', 'ArticleController@create');
Route::get('/artikel/{slug}', 'ArticleController@show');
Route::post('/artikel', 'ArticleController@store');
Route::get('/artikel/{id}/edit', 'ArticleController@edit');
Route::put('/artikel/{id}', 'ArticleController@update');
Route::delete('/artikel/{id}', 'ArticleController@destroy');


Route::get('/dummy', function () {
    return view('dummy');
});
Route::get('/footer', function () {
    return view('footer');
});

// ADMIN Dashboard
Route::get('/dashboard', 'DashboardController@index');
// ADMIN user
Route::get('/adminuser', 'UserController@index');
// Pendapatan
Route::get('/pendapatan', 'PendapatanController@index');
// Transaksi
Route::get('/transaksi', 'TransaksiController@index');



