@extends('layouts.principal')
@section('content')
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Deducciones</h2>
            </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-4 text-center">
                <img class="img-circle img-responsive img-center" width="90" src="images/loan.png" alt="">
                <h3>Registrar Prestamo</h3>
                <p>Modulo encargado de ingresar empleados al sistema de planillas!</p>
                <p>
                   <!-- <a href="Registrar_Empleado.html" class="btn btn-primary center-block" role="button" data-toggle="modal" data-target="#factGasolina">Ingresar</a>-->
                    <a href="{!!URL::to('/prestamos/create')!!}" class="btn btn-primary center-block" role="button">Ingresar</a>
                </p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 text-center">
                <img class="img-circle img-responsive img-center" width="90" src="images/coins.png" alt="">
                <h3>Registrar Vale</h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
                <p>
                    <a href="{!!URL::to('/vales/create')!!}" class="btn btn-primary center-block" role="button">Ingresar</a>
                </p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 text-center">
                <img class="img-circle img-responsive img-center" width="90" src="images/check.png" alt="">
                <h3>Registrar Otra Deducción</h3>
                <p>Modulo encargado de mostrar todos los datos del empleado!</p>
                <p>
                    <a href="{!!URL::to('/otrasDeducciones/create')!!}" class="btn btn-primary center-block" role="button">Ingresar</a>
                </p>
            </div>
        </div>
            <hr class="divisor">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-4 text-center">
                <img class="img-circle img-responsive img-center" width="90" src="images/money-3.png" alt="">
                <h3>Lista de Prestamos</h3>
                <p>Modulo encargado de mostrar la lista de empleados actuales!</p>
                <p>
                    <a href="{!!URL::to('/departamentos')!!}" class="btn btn-primary center-block" role="button">Ingresar</a>
                </p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 text-center">
                <img class="img-circle img-responsive img-center" width="90" src="images/money-2.png" alt="">
                <h3>Lista de Vales</h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
                <p>
                    <a href="{!!URL::to('/puestos')!!}" class="btn btn-primary center-block" role="button">Ingresar</a>
                </p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 text-center">
                <img class="img-circle img-responsive img-center" width="90" src="images/money-1.png" alt="">
                <h3>Lista de Otras Deducciones</h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
                <p>
                    <a href="{!!URL::to('/salarios')!!}" class="btn btn-primary center-block" role="button">Ingresar</a>
                </p>
            </div>
            
        </div>
        <hr class="divisor">
        </div>
@stop
