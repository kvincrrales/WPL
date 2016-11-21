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
                <h2 class="page-header">Lista de Salarios</h2>
            </div>
            <table class="table table-striped" id="tblGrid">
            <thead id="tblHead">
                <tr>
                  <th>Nombre del Empleado</th>
                  <th>Salario Mensual</th>
                  <th>Salario Quincenal</th>
                  <th>Salario Semanal</th>
                  <th>Salario Diario</th>
                  <th>Salario Horas</th>
                  <th>Salario Horas Extra</th>
                  <th>Accion</th>
                </tr>
            </thead>
            @foreach($users as $salario)
              <tbody>
                      <tr>
                      <td>  {{$salario ->nomb}}</td>
                      <td>₡ {{$salario -> salarioM}}</td>
                      <td>₡ {{$salario -> salarioQ}}</td>
                      <td>₡ {{$salario -> salarioS}}</td>
                      <td>₡ {{$salario -> salarioD}}</td>
                      <td>₡ {{$salario -> salarioH}}</td>
                      <td>₡ {{$salario -> salarioHE}}</td>
                      <td><button type="button" class="btn btn-sucess">{!!link_to_route('salarios.edit', $title = 'Editar', $parameters = $salario->id)!!}</button></td>
                      </tr>
              </tbody>
               @endforeach
            </table>
</div>

  {!!$sal->render()!!}

  
         @stop