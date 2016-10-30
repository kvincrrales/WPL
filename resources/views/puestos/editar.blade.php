@extends('layouts.principal')

@section('content')
 <!-- Team Members Row -->
         <div class="row">
            <div class="col-lg-12">
               <h2 class="page-header">Nuevo Puesto</h2>
            </div>
             <!-- 'route'=>'empleados.emp', -->
            {!!Form::model($pue,['route'=>['puestos.update',$pue->id],'method'=>'PUT'])!!}
   <div class="form-group">
      {!!Form::label('Departamento:')!!}
      {!!Form::select('dep',$dept,null,['class'=>'form-control'])!!}
   </div>
   <div class="form-group">
      {!!Form::label('Nombre:')!!}
      {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
   </div>
   <div class="form-group">
      {!!Form::label('Descripcion:')!!}
      {!!Form::text('desc',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
   </div>
   <div class="row">
            <div class="form-group col-sm-12">
            {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
            {!!Form::close()!!}
            </div>
            </div>
            <div class="row">
            <div class="form-group col-sm-12">
            {!!Form::open(['route'=>['puestos.destroy',$pue->id],'method'=>'DELETE'])!!}
            {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
            {!!Form::close()!!}
            </div>
            </div>
            <hr class="divisor">
         </div>
@stop