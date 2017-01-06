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
                <h2 class="page-header">Lista de Departamentos</h2>
            </div>
            <table class="table table-striped" id="tblGrid">
            <thead id="tblHead">
                <tr>
                  <th>ID DEPT</th>
                  <th>Nombre</th>
                  <th>Télefono</th>
                  <th>Descripcion</th>
                  <th>Accion</th>
                </tr>
            </thead>
            @foreach($dept as $departamento)
              <tbody>
                      <tr>
                      <td>{{$departamento -> id}}</td>
                      <td>{{$departamento -> nombre}}</td>
                      <td>{{$departamento -> tel}}</td>
                      <td>{{$departamento -> desc}}</td>
                      <td><button type="button" class="btn btn-sucess">{!!link_to_route('departamentos.edit', $title = 'Editar', $parameters = $departamento->id)!!}</button></td>
                      </tr>
              </tbody>
            @endforeach
            </table>
</div>

  {!!$dept->render()!!}

  
         @stop