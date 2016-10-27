@extends('layouts.principal')

@section('content')
 <!-- Team Members Row -->
         <div class="row">
            <div class="col-lg-12">
               <h2 class="page-header">Nueva Vacacion</h2>
            </div>
             <!-- 'route'=>'empleados.emp', -->
            {!!Form::open(['method'=>'POST'])!!}
            <div class="row">
   <div class="form-group col-sm-6">
      {!!Form::label('Nombre del Departamento:')!!}
      {!!Form::text('nomb',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del departamento'])!!}
   </div>
   <div class="form-group col-sm-6">
      {!!Form::label('Jefe del Departamento:')!!}
      {!!Form::text('jefe',null,['class'=>'form-control'])!!}
   </div>
         </div>
         <div class="row">
   <div class="form-group col-sm-6">
      {!!Form::label('Telefono del Departamento:')!!}
      {!!Form::text('tel',null,['class'=>'form-control','placeholder'=>'Ingrese el numero de telefono'])!!}
   </div>
   </div>
   <div class="row">
   <div class="form-group col-sm-12">
      {!!Form::label('Descripcion del Departamento:')!!}
      {!!Form::text('desc',null,['class'=>'form-control','placeholder'=>'Ingrese la descripcion del departamento'])!!}
   </div>
   </div>
   
   {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
   {!!Form::close()!!}
            <hr class="divisor">
         </div>
@stop
