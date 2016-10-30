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
                  <th>ID Puesto</th>
                  <th>ID Departamento</th>
                  <th>Nombre</th>
                  <th>Descripcion</th>
                  <th>Accion</th>
                </tr>
            </thead>
            @foreach($puesto as $puestos)
            <tbody>
                  <tr>
                  <td>{{$puestos -> id}}</td>
                  <td>{{$puestos -> dept_id}}</td>
                  <td>{{$puestos -> nombre}}</td>
                  <td>{{$puestos -> desc}}</td>
                  
                  <td><button type="button" class="btn btn-sucess">{!!link_to_route('puestos.edit', $title = 'Editar', $parameters = $puestos->id)!!}</button></td>
              </tr>
            </tbody>
            @endforeach
            </table>
</div>
         @stop