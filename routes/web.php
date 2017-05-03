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

Route::get('/', function () {
    return view('welcome');
});

#Añadido por nano para poder usar display database
Route::get('/home', 'Controller@getData');
#Añadir datos
Route::post('/insert','Controller@insert');

Auth::routes();

#Route::get('/home', 'HomeController@index')->name('home');
