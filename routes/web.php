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

Route::redirect('/','home');

Route::get('/home', function () {
    return view('layouts.admin');
})->name('home')->middleware('auth');

Auth::routes();

//Paquetes
Route::resource('paquetes', 'PaqueteController');

//Guias
Route::resource('guias', 'GuiaController');

//Reservas
Route::resource('reservas', 'ReservaController');


//Route::get('/home', 'HomeController@index')->name('home');
