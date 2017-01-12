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
Route::get('incapacidad','FrontController@incapacidades');
Route::get('deducciones','FrontController@deducciones');
Route::get('vacacion','FrontController@vacaciones');
Route::get('ahorro','FrontController@ahorros');
Route::get('aguinaldo','FrontController@aguinaldos');
Route::get('salariosEmpleados','FrontController@salarios');
Route::get('disponibles','VacacionesController@vdisponibles');
Route::resource('log','LogController');
Route::get('logout','LogController@logout');

Route::resource('usuario','userController');
Route::resource('empleados','EmpleadosController');
Route::resource('departamentos','DepartamentosController');
Route::resource('puestos','PuestosController');
Route::resource('salarios','SalariosController');
Route::resource('incapacidades','IncapacidadesController');
Route::resource('ahorros','AhorrosController');
Route::resource('aguinaldos','AguinaldosController');
Route::resource('vacaciones','VacacionesController');
Route::resource('cajas','CajasController');


Route::resource('otrasDeducciones','OtrasDeduccionesController');
Route::resource('prestamos','PrestamosController');
Route::resource('vales','ValesController');
Route::resource('planillas','PlanillasController');



//controller@método de los ajax

Route::get('calculo','SalariosController@calcularSalarios');
//Route::get('calculoPlanilla','PlanillasController@reCalcularSalario');

Route::get('calculoPlanillas','PlanillasController@calcularPlanilla');

Route::get('calculoVale','ValesController@calcularVale');

Route::get('calculoPrestamo','PrestamosController@calcularPrestamo');

Route::get('calculoVacacion','VacacionesController@calcularVacacion');

Route::get('calculoIncapacidad','IncapacidadesController@calcularIncapacidad');

//Route::get('vacaciones', 'VacacionesController@importExport');
Route::get('downloadExcel/{id}', 'VacacionesController@downloadExcel');

Route::get('downloadExcelAhorros/{id}', 'AhorrosController@downloadExcel');

Route::get('downloadExcelIncapacidades/{id}', 'IncapacidadesController@downloadExcel');

Route::get('downloadExcelDeducciones/{id}', 'OtrasDeduccionesController@downloadExcel');

Route::get('downloadExcelPrestamos/{id}', 'PrestamosController@downloadExcel');

Route::get('downloadExcelVales/{id}', 'ValesController@downloadExcel');

//Route::get('downloadExcel/{id}', 'PlanillasController@downloadExcel');

Route::get('caja','FrontController@caja');

Route::get('calculoCaja','CajasController@calcularCaja');





