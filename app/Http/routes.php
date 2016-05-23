<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/','UsuarioController@index');
Route::get('new','UsuarioController@nuevoUsuario');
Route::get('save','UsuarioController@save');
Route::get('edit/{id}','UsuarioController@edit');
Route::get('delete/{id}','UsuarioController@delete');
Route::get('updateInfo','UsuarioController@updateInfo');
