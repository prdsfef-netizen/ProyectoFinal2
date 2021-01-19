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
    return view('auth.login');
});

//Route::get('/docentes', 'DocentesController@index');

//Route::get('/docentes/create','DocentesController@create');

//Route::get('/docentes/edit', function () {
//    return view('docentes.edit');
//});

//Route::get('/docentes/form', function () {
//    return view('docentes.form');
//});

Route::resource('docentes','DocentesController')->middleware('auth');
Route::resource('materia','MateriaController')->middleware('auth');
Route::resource('horarios','HorariosController')->middleware('auth');
Route::resource('bitacora','BitacoraController')->middleware('auth');

Auth::routes(['register'=>false,'reset'=>false]);

Route::get('/home', 'HomeController@index')->name('home');
