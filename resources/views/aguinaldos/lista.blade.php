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
                <h2 class="page-header">Lista de Aguinaldos</h2>
            </div>
            <table class="table table-striped" id="tblGrid">
            <thead id="tblHead">
                <tr>
                  <th>Cédula</th>
                  <th>Nombre</th>
                  <th>Total</th>
                  <th>Acción</th>
                </tr>
            </thead> 
              <tbody>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><button type="button" class="btn btn-sucess">EDITAR</button></td>
                  </tr>
              </tbody>
            </table>
</div>

  
         @stop