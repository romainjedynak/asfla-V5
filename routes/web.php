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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

/* Agenda */
Route::get('/agenda/index', function () {
    return view('agenda/index');
})->name('agenda.index');

/* Gestion des documents */
Route::get('/document/index', function () {
    return view('document/index');
})->name('document.index');

/* Gestion des membres */
Route::get('/membre/index', function () {
    return view('membre/index');
})->name('membre.index');



Route::get('/home', 'HomeController@index')->name('home');
