@extends('layouts.principal')

@section('content')
 <!-- Team Members Row -->
         <div class="row">
            <div class="col-lg-12">
               <h2 class="page-header">Nuevo Puesto</h2>
            </div>
             <!-- 'route'=>'empleados.emp', -->
            {!!Form::open(['route'=>'puestos.store','method'=>'POST'])!!}
   <div class="form-group">
      {!!Form::label('Departamento:')!!}
      {!!Form::text('dep',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
   </div>
   <div class="form-group">
      {!!Form::label('Nombre:')!!}
      {!!Form::text('nomb',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
   </div>
   <div class="form-group">
      {!!Form::label('Descripcion:')!!}
      {!!Form::text('desc',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
   </div>
   {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
   {!!Form::close()!!}
            <hr class="divisor">
         </div>
@stop