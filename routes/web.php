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

// HOME
Route::get('/', 'MainController@home') -> name('home');

// SINGOLO DIPENDENTE
Route::get('/employee/{id}', 'MainController@employee') -> name('employee');

// CREA SINGOLO DIPENDENTE
Route::get('create', 'MainController@create') -> name('create');
Route::post('store', 'MainController@store') -> name('store');

// MODIFICA SINGOLO DIPENDENTE
Route::get('edit/employee/{id}', 'MainController@edit')-> name('edit');
Route::post('update/employee/{id}', 'MainController@update')-> name('update');

// ELIMINA SINGOLO DIPENDENTE
Route::get('/destroy/{id}', 'MainController@destroy') -> name('destroy');