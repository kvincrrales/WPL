@extends('layouts.admin')

@section('content')
@if(Session::has('message'))
<div class="alert alert-success" role="alert">
  <a href="#" class="alert-link"></a>
  {{Session::get('message')}}
</div>
@endif
<div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Lista de Usuarios</h2>
            </div>
            <table class="table table-striped" id="tblGrid">
            <thead id="tblHead">
                <tr>
                  <th>ID Usuario</th>
                  <th>Nombre</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Accion</th>
                </tr>
            </thead>
            @foreach($usr as $user)
              <tbody>
                      <tr>
                      <td>{{$user -> id}}</td>
                      <td>{{$user -> name}}</td>
                      <td>{{$user -> email}}</td>
                      <td>{{$user -> password}}</td>
                      <td><button type="button" class="btn btn-sucess">EDITAR</button></td>
                      </tr>
              </tbody>
            @endforeach
            </table>
</div>

  {!!$usr->render()!!}
         @stop

