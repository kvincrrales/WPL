@extends('layouts.principal')

@section('content')
@if(Session::has('message'))
<br>
<div class="alert alert-success" role="alert">
  <a href="#" class="alert-link"></a>
  {{Session::get('message')}}
</div>
@endif
<div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Vacaciones Disponibles</h2>
            </div>
            <table class="table table-striped" id="tblGrid">
            <thead id="tblHead">
                <tr>
                  <th>Cédula</th>
                  <th>Nombre</th>
                  <th>Apellidos</th>
                  <th>Fecha de Ingreso</th>
                  <th>Días Disponibles</th>
                </tr>
            </thead>
             @foreach($vacD as $vacacionesD)
              <tbody>
                      <tr>
                      <td>{{$vacacionesD -> numId}}</td>
                      <td>{{$vacacionesD -> nomb}}</td>
                      <td>{{$vacacionesD -> ape1}} {{$vacacionesD -> ape2}}</td>
                      <td>{{$vacacionesD -> fIngreso}}</td>
                      <td>{{$vacacionesD -> vacaciones_disponibles}}</td>
                      </tr>
              </tbody>
             @endforeach
            </table>
</div>
@stop