@extends('layouts.principal')
@section('content')
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Incapacidades</h2>
            </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-4 text-center">
                <img class="img-circle img-responsive img-center" width="90" src="images/report.png" alt="">
                <h3>Registrar Incapacidad</h3>
                <p>Modulo encargado de ingresar empleados al sistema de planillas!</p>
                <p>
                   <!-- <a href="Registrar_Empleado.html" class="btn btn-primary center-block" role="button" data-toggle="modal" data-target="#factGasolina">Ingresar</a>-->
                    <a href="{!!URL::to('/incapacidades/create')!!}" class="btn btn-primary center-block" role="button">Ingresar</a>
                </p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 text-center">
                <img class="img-circle img-responsive img-center" width="90" src="images/folder.png" alt="">
                <h3>Lista de Incapacidades</h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
                <p>
                    <a href="{!!URL::to('/incapacidades')!!}" class="btn btn-primary center-block" role="button">Ingresar</a>
                </p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 text-center">
                <img class="img-circle img-responsive img-center" width="90" src="images/employee.png" alt="">
                <h3>Incapacidades por Empleado</h3>
                <p>Modulo encargado de mostrar todos los datos del empleado!</p>
                <p>
                    <a href="#" class="btn btn-primary center-block" role="button">Ingresar</a>
                </p>
            </div>
        </div>
        <hr class="divisor">
        </div>
@stop
