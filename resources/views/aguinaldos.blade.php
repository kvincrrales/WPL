@extends('layouts.principal')
@section('content')
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Aguinaldos</h2>
            </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-4 text-center">
                <img class="img-circle img-responsive img-center" width="90" src="images/rich.png" alt="">
                <h3>Lista de Aguinaldos</h3>
                <p>Modulo encargado de ingresar empleados al sistema de planillas!</p>
                <p>
                   <!-- <a href="Registrar_Empleado.html" class="btn btn-primary center-block" role="button" data-toggle="modal" data-target="#factGasolina">Ingresar</a>-->
                    <a href="{!!URL::to('/aguinaldos/create')!!}" class="btn btn-primary center-block" role="button">Ingresar</a>
                </p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 text-center">
                <img class="img-circle img-responsive img-center" width="90" src="images/money.png" alt="">
                <h3>Pago de Aguinaldos</h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
                <p>
                    <a href="{!!URL::to('/aguinaldos')!!}" class="btn btn-primary center-block" role="button">Ingresar</a>
                </p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 text-center">
                <img class="img-circle img-responsive img-center" width="90" src="images/bill.png" alt="">
                <h3>Historial de Aguinaldo</h3>
                <p>Modulo encargado de mostrar todos los datos del empleado!</p>
                <p>
                    <a href="#" class="btn btn-primary center-block" role="button">Ingresar</a>
                </p>
            </div>
        </div>
        <hr class="divisor">
        </div>
@stop