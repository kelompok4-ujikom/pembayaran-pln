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
// MAIN FORMS
Route::get('/', 'HomeController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')->prefix('admin')->middleware(['auth', 'admin'])->name('admin.')->group(function() {
    Route::get('/beranda', 'BerandaController@index')->name('beranda.index');
    // tampil data user
    Route::get('/user', 'AuthController@index')->name('auth.index');
    // detail data user
    Route::get('/user/detail/{user}', 'AuthController@detail')->name('auth.detail');
    // searching
    Route::post('/user', 'AuthController@search')->name('auth.search');
});
Route::namespace('Pelanggan')->prefix('pelanggan')->middleware(['auth', 'pelanggan'])->name('pelanggan.')->group(function() {
    Route::get('/beranda', 'BerandaController@index')->name('beranda.index');
});
Route::namespace('Bank')->prefix('bank')->middleware(['auth', 'bank'])->name('bank.')->group(function() {
    Route::get('/beranda', 'BerandaController@index')->name('beranda.index');
});
