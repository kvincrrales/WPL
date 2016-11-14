@extends('layouts.principal')

@section('content')
<div class="row">

<?php var_dump($users); ?>

<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

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
                  <th>Horas</th>
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
              @foreach($users as $user)
              <tbody>
                      <tr>
                        <td><span id="id" >{{$user -> id}}</span></td>
                        <td>{{$user -> nomb}}</td>
                        <td style="width: 130px !important">{{$user -> cBanc}}</td>
                        <td>{{$user -> salarioM}}</td>
                        <td><input data-id='<?php echo $user -> id;?>' type="number" value="40" style="max-width: 50px !important" id="horasNormal"></td>
                        <td><input data-id='<?php echo $user -> id;?>' type="number" value="0" style="max-width: 50px !important" id="horasExtra"></td>
                        <td>{{$user -> caja}}</td >
                        <td>{{$user -> montoS}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><span id="total<?php echo $user -> id;?>" >{{$user->total}}</span></td>
                        <td><button type="button" class="btn btn-sucess">EDITAR</button></td>
                      </tr>
              </tbody>
            @endforeach
            </table>
            <p class="note">Si no aparece un usuario, es por que aún no le ha asignado un salario.</p>

            {!!Html::script('js/jquery.js')!!}

            {!!Html::script('js/planillas.js')!!}
</div>


  
@stop