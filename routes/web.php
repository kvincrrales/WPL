<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/','FrontController@index');
Route::get('modulos','FrontController@modulos');
Route::get('dept','FrontController@departamentos');
Route::get('deducciones','FrontController@deducciones');
Route::resource('log','LogController');
Route::get('logout','LogController@logout');

Route::resource('usuario','userController');
Route::resource('empleados','EmpleadosController');
Route::resource('departamentos','DepartamentosController');
Route::resource('puestos','PuestosController');
Route::resource('salarios','SalariosController');