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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('usuarios')->middleware('auth')->group(function() {
    Route::get('/', 'UsersController@index')->name('users.index');
});


Route::get('/pessoas', 'PessoasController@index')->name('pessoas.index');
Route::get('/pessoas/novo', 'PessoasController@create')->name('pessoas.create')->middleware('auth');
Route::post('/pessoas', 'PessoasController@store')->name('pessoas.store')->middleware('auth');
Route::get('/pessoas/edit/{id}', 'PessoasController@edit')->name('pessoas.edit')->middleware('auth');
Route::put('/pessoas/{id}', 'PessoasController@update')->name('pessoas.update')->middleware('auth');
Route::delete('/pessoas/{id}', 'PessoasController@destroy')->name('pessoas.destroy')->middleware('auth');
