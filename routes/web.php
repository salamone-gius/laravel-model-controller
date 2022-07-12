<?php

use Illuminate\Support\Facades\Route;

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

// rendo disponibile il db già alla home inserendo il controller relativo come secondo parametro nella Rotta Parametrica
Route::get('/', 'MovieController@index')->name('home');

// definisco un'altra rotta parametrica per il film singolo
// con ->where inserisco un controllo sull'id che deve essere un numero (regular expression)
Route::get('/movie/{id}', 'MovieController@show')->where('id', '[0-9]+')->name('movie-details');
