@extends('layouts.principal')

@section('content')
<div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Planillas</h2>
            </div>
            <table class="table table-striped" id="tblGrid">
            <thead id="tblHead">
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Cuenta</th>
                  <th>Salario</th>
                  <th>Horas/th>
                  <th>Horas Extra</th>
                  <th>C.C.S.S</th>
                  <th>Prestamos</th>
                  <th>Vales</th>
                  <th>Otros</th>
                  <th>Vacaciones</th>
                  <th>Ahorros</th>
                  <th>Total</th>
                  <th>Acciones</th>
                </tr>
            </thead>
              <tbody>
                      <tr>
                      <td>x</td>
                      <td>x</td>
                      <td>x</td>
                      <td>x</td>
                      <td>x</td>
                      <td>x</td>
                      <td>x</td>
                      <td>x</td>
                      <td>x</td>
                      <td>x</td>
                      <td>x</td>
                      <td>x</td>
                      <td>x</td>
                      <td><button type="button" class="btn btn-sucess">EDITAR</button></td>
                      </tr>
              </tbody>

            </table>
</div>


  
         @stop