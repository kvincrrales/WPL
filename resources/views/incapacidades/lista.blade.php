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
                <h2 class="page-header">Lista de Incapadidades</h2>
            </div>
            <table class="table table-striped" id="tblGrid">
            <thead id="tblHead">
                <tr>
                  <th>Nombre del Empleado</th>
                  <th>Fecha</th>
                  <th>Tipo</th>
                  <th>Notas</th>
                  <th>Accion</th>
                </tr>
            </thead>
            @foreach($inc as $incapacidad)
              <tbody>
                      <tr>
                      <td>{{$incapacidad -> emp_id}}</td>
                      <td>{{$incapacidad -> fecha}}</td>
                      <td>{{$incapacidad -> tipo}}</td>
                      <td>{{$incapacidad -> nota}}</td>
                      <td><button type="button" class="btn btn-sucess">{!!link_to_route('incapacidades.edit', $title = 'Editar', $parameters = $incapacidad->id)!!}</button></td>
                      </tr>
              </tbody>
            @endforeach
            </table>
</div>

  {!!$inc->render()!!}

  
         @stop