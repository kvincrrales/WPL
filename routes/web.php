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
Route::resource('planillasLista','PlanillasController@lista');
Route::resource('cajaCrear','CcSsController@index');



//controller@método de los ajax
Route::post('/insert',array('as'=>'insert','uses'=>'PlanillasController@insert'));

Route::get('calculo','SalariosController@calcularSalarios');

Route::get('calculoVale','ValesController@calcularVale');

Route::get('calculoPrestamo','PrestamosController@calcularPrestamo');

Route::get('calculoVacacion','VacacionesController@calcularVacacion');

Route::get('calculoIncapacidad','IncapacidadesController@calcularIncapacidad');

Route::get('downloadExcel/{id}', 'VacacionesController@downloadExcel');

Route::get('downloadExcelAhorros/{id}', 'AhorrosController@downloadExcel');

Route::get('downloadExcelIncapacidades/{id}', 'IncapacidadesController@downloadExcel');

Route::get('downloadExcelDeducciones/{id}', 'OtrasDeduccionesController@downloadExcel');

Route::get('downloadExcelPrestamos/{id}', 'PrestamosController@downloadExcel');

Route::get('downloadExcelVales/{id}', 'ValesController@downloadExcel');

Route::get('downloadPdfVales/{id}', 'ValesController@downloadPdf');

Route::get('downloadPdfVacaciones/{id}', 'VacacionesController@downloadPdf');

Route::get('downloadPdfAhorros/{id}', 'AhorrosController@downloadPdf');

Route::get('downloadPdfListaEmpleados', 'EmpleadosController@downloadPdf');

Route::get('caja','FrontController@caja');

Route::get('calculoCaja','CajasController@calcularCaja');

Route::get('downloadPdfPlanillas', 'PlanillasController@downloadPdf');

Route::get('calculoCajaCCSS','CcSsController@crear');

Route::get('pdf',function(){
	$pdf = PDF::loadview('vista');
	return $pdf->download('archivo.pdf');
});


Route::get('/autocomplete',array('as'=>'autocomplete','uses'=>'IncapacidadesController@autocomplete'));

Route::get('/autocompletePadron',array('as'=>'autocomplete','uses'=>'EmpleadosController@autocomplete'));






