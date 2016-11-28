@extends('layouts.principal')

@section('content')
 <!-- Team Members Row -->
         <div class="row">
            <div class="col-lg-12">
               <h2 class="page-header">Nuevo Departamento</h2>
            </div>
             <!-- 'route'=>'empleados.emp', -->
            {!!Form::model($dept,['route'=>['departamentos.update',$dept->id],'method'=>'PUT'])!!}
            <div class="row">
   <div class="form-group col-sm-6">
      {!!Form::label('Nombre del Departamento:')!!}
      {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del departamento'])!!}
   </div>
   <div class="form-group col-sm-6">
      {!!Form::label('Jefe del Departamento:')!!}
      {!!Form::select('jefe',$emp,null,['class'=>'form-control'])!!}
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
   <div class="row">
   <div class="form-group col-sm-12">
   {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
   {!!Form::close()!!}
   </div>
   </div>
   <div class="row">
   <div class="form-group col-sm-12">
   {!!Form::open(['route'=>['departamentos.destroy',$dept->id],'method'=>'DELETE'])!!}
   {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
   {!!Form::close()!!}
   </div>
   </div>

            <hr class="divisor">
         </div>
@stop

