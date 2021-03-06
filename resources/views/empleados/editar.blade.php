@extends('layouts.admin')

@section('content')
<!-- Team Members Row -->
<div class="row">
 <div class="col-lg-12">
  <h2 class="page-header">Registrar Empleado</h2>
</div>
{!!Form::model($emp,['route'=>['empleados.update',$emp->id],'method'=>'PUT'])!!}
<!-- 'route'=>'empleado.store' empleado es como se llama la ruta en routes -->
<!--Revisar quitar tipo de planilla para manejarlo en puestos-->
<br>
<div class="row">
  <div class="form-group col-sm-6">
   {!!Form::label('Estatus: ')!!}
   {!!Form::select('estatus', ['Activo' => 'Activo', 'Inactivo' => 'Inactivo'],null, ['class' => 'form-control'])!!}
 </div>
 <div class="form-group col-sm-6">
   {!!Form::label('Fecha de Ingreso: ')!!}
   {!!Form::date('fIngreso',null,['class'=>'form-control'])!!}
 </div>
</div>
<div class="row">
  <div class="form-group col-sm-6">
   {!!Form::label('Sexo: ')!!}
   {!!Form::select('sexo', ['0' => 'Masculino', '1' => 'Femenino'],null, ['class' => 'form-control'])!!}
 </div>
 <div class="form-group col-sm-6">
   {!!Form::label('Tipo ID: ')!!}
   {!!Form::select('tipoId', ['0' => 'Cédula de Identidad', '1' => 'Cédula Jurídica','2' => 'Cédula de Residencia', '3' => 'Pasaporte', '4' => 'Carnet de Refugiado'],null, ['class' => 'form-control'])!!}
 </div>
 <div class="form-group col-sm-6">
  {!!Form::label('Num Id: ')!!}
  {!!Form::text('numId',null,['class'=>'form-control','placeholder'=>'Digite el primer apellido'])!!}
</div>
</div>
<div class="row">
 <div class="form-group col-sm-3">
  {!!Form::label('Nombre: ')!!}
  {!!Form::text('nomb',null,['class'=>'form-control','placeholder'=>'Digite el primer apellido'])!!}                                                              
</div>
<div class="form-group col-sm-3">
  {!!Form::label('Primer Apellido: ')!!}
  {!!Form::text('ape1',null,['class'=>'form-control','placeholder'=>'Digite el primer apellido'])!!}
</div>
<div class="form-group col-sm-3">
  {!!Form::label('Segundo Apellido: ')!!}
  {!!Form::text('ape2',null,['class'=>'form-control','placeholder'=>'Digite el segundo apellido'])!!}
</div>
<div class="form-group col-sm-3">
  {!!Form::label('Fecha de Nacimiento: ')!!}
  {!!Form::date('fNac',null,['class'=>'form-control'])!!}
</div>
</div>
<div class="row">
 <div class="form-group col-sm-3">
  {!!Form::label('Celular: ')!!}
  {!!Form::text('nCel',null,['class'=>'form-control','placeholder'=>'Digite el número de celular'])!!}
</div>
<div class="form-group col-sm-3">
  {!!Form::label('Número de Casa: ')!!}
  {!!Form::text('nCasa',null,['class'=>'form-control','placeholder'=>'Digite el número de casa'])!!}
</div>
<div class="form-group col-sm-3">
  {!!Form::label('Email: ')!!}
  {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Digite el correo electronico'])!!}
</div>
</div>
<div class="row">
 <div class="form-group col-sm-12">
  {!!Form::label('Direccion: ')!!}
  {!!Form::text('dir',null,['class'=>'form-control','placeholder'=>'Digite el domicilio','id'=>'dir'])!!}
</div>
</div>
<div class="row">
 <div class="form-group col-sm-6">
   {!!Form::label('Departamento: ')!!}
   {!!Form::select('dept_id',$depart,null,['class'=>'form-control','onchange'=>"document.getElementById('text_contentD').value=this.options[this.selectedIndex].text"])!!}
 </div>
 <div class="hidden">
   {!!Form::text('nombD',null,['class'=>'hidden','id' => 'text_contentD'])!!}
 </div>
 <div class="form-group col-sm-6">
   {!!Form::label('Puesto: ')!!}
   {!!Form::select('puesto_id',$puesto,null,['class'=>'form-control','onchange'=>"document.getElementById('text_contentP').value=this.options[this.selectedIndex].text"])!!}
 </div>
 <div class="hidden">
   {!!Form::text('nombP',null,['class'=>'hidden','id' => 'text_contentP'])!!}
 </div>
</div>
<div class="row">
 <div class="form-group col-sm-4">
  {!!Form::label('Forma de Pago: ')!!}
  {!!Form::select('fPago', ['0' => 'Efectivo', '1' => 'Cheque', '2' => 'Transaccion'],null, ['class' => 'form-control'])!!}
</div>
<div class="form-group col-sm-4">
  {!!Form::label('Cuenta Bancaria: ')!!}
  {!!Form::text('cBanc',null,['class'=>'form-control','placeholder'=>'Digite el número de cuenta'])!!}
</div>
<div class="form-group col-sm-4">
  {!!Form::label('Cuenta de Ahorros: ')!!}
  {!!Form::text('cAhorro',null,['class'=>'form-control','placeholder'=>'Digite el número de cuenta'])!!}
</div>
</div>
<div class="row">
 <div class="form-group col-sm-6">
  {!!Form::label('Salario: ')!!}
  {!!Form::text('salario',null,['class'=>'form-control','placeholder'=>'Digite el Salario'])!!}
</div>
<div class="form-group col-sm-6">
  {!!Form::label('Vacaciones al Año: ')!!}
  {!!Form::text('totalVacaciones',null,['class'=>'form-control','placeholder'=>'Digite la cantidad de vacaciones anuales'])!!}
</div>
</div>
<div class="row">
 <div class="form-group col-sm-6">
  {!!Form::label('Tipo de Planilla: ')!!}
  {!!Form::select('tipoPlanilla', ['0' => 'Semanal', '1' => 'Quincenal', '2' => 'Mensual'],null, ['class' => 'form-control'])!!}
</div>
<div class="form-group col-sm-6">
  {!!Form::label('Foto del Empleado: ')!!}
  <input name="fotoEmpleado" type="file" class="form-control">
</div>
</div>
<div class="footer">
  {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
  {!!Form::close()!!}
  {!!Form::open(['route'=>['empleados.destroy',$emp->id],'method'=>'DELETE'])!!}
  {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
  {!!Form::close()!!}
</div>
<hr>
</div>
{!!Html::script('js/jquery.js')!!}
{!!Html::script('js/jqueryui.js')!!}
{!!Html::script('js/autocomplete.js')!!}
@stop