@extends('layouts.principal')
@section('content')
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Salarios</h2>
            </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-4 text-center">
                <img class="img-circle img-responsive img-center" width="90" src="images/bill.png" alt="">
                <h3>Registrar Salario</h3>
                <p>Modulo encargado de ingresar empleados al sistema de planillas!</p>
                <p>
                    <a href="{!!URL::to('/salarios/create')!!}" class="btn btn-primary center-block" role="button">Ingresar</a>
                </p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 text-center">
                <img class="img-circle img-responsive img-center" width="90" src="images/check.png" alt="">
                <h3>Lista de Salarios</h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
                <p>
                    <a href="{!!URL::to('/salarios')!!}" class="btn btn-primary center-block" role="button">Ingresar</a>
                </p>
            </div>
        </div>
        <hr class="divisor">
        </div>
@stop
