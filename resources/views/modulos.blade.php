@extends('layouts.principal')
@section('content')
 <!-- Team Members Row -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Modulos</h2>
            </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-4 text-center">
                <img class="img-circle img-responsive img-center" width="90" src="images/employee.png" alt="">
                <h3>Registrar Empleados</h3>
                <p>Modulo encargado de ingresar empleados al sistema de planillas!</p>
                    <p>
                    <a href="{!!URL::to('/empleados/create')!!}" class="btn btn-primary center-block" role="button">Ingresar</a>
                    </p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 text-center">
                <img class="img-circle img-responsive img-center" width="90" src="images/employees.png" alt="">
                <h3>Lista de Empleados</h3>
                <p>Modulo encargado de mostrar la lista de empleados actuales!</p>
                <p>
                    <a href="{!!URL::to('/empleados')!!}" class="btn btn-primary center-block" role="button">Ingresar</a>
                </p>
            </div>
                       <div class="col-sm-6 col-md-6 col-lg-4 text-center">
                <img class="img-circle img-responsive img-center" width="90" src="images/desk.png" alt="">
                <h3>Departamentos y Puestos</h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
                <p>
                    <a href="{!!URL::to('/dept')!!}" class="btn btn-primary center-block" role="button">Ingresar</a>
                </p>
            </div>
        </div>
            <hr class="divisor">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-4 text-center">
                <img class="img-circle img-responsive img-center" width="90" src="images/piggy-bank-1.png" alt="">
                <h3>Ahorros</h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
                <p>
                    <a href="{!!URL::to('/ahorro')!!}" class="btn btn-primary center-block" role="button">Ingresar</a>
                </p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 text-center">
                <img class="img-circle img-responsive img-center" width="90" src="images/wallet.png" alt="">
                <h3>Deducciones</h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
                <p>
                    <a href="{!!URL::to('/deducciones')!!}" class="btn btn-primary center-block" role="button">Ingresar</a>
                </p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 text-center">
                <img class="img-circle img-responsive img-center" width="90" src="images/sunbed.png" alt="">
                <h3>Vacaciones</h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
                <p>
                    <a href="{!!URL::to('/vacacion')!!}" class="btn btn-primary center-block" role="button">Ingresar</a>
                </p>
            </div>
            
            
        </div>
        <hr class="divisor">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-4 text-center">
                <img class="img-circle img-responsive img-center" width="90" src="images/hospital.png" alt="">
                <h3>Incapacidades</h3>
                <p>Modulo encargado de mostrar la lista de empleados actuales!</p>
                <p>
                    <a href="{!!URL::to('/incapacidad')!!}" class="btn btn-primary center-block" role="button">Ingresar</a>
                </p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 text-center">
                <img class="img-circle img-responsive img-center" width="90" src="images/notes.png" alt="">
                <h3>Planillas</h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
                <p>
                    <a href="{!!URL::to('/planillas')!!}" class="btn btn-primary center-block" role="button">Ingresar</a>
                </p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 text-center">
                <img class="img-circle img-responsive img-center" width="90" src="images/receipt.png" alt="">
                <h3>Reportes a la Caja</h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
                <p>
                    <a href="{!!URL::to('/cajaCrear')!!}" class="btn btn-primary center-block" role="button">Ingresar</a>
                </p>
            </div>
            
            
        </div>
         <hr class="divisor">
         <!--
         <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-4 text-center">
                <img class="img-circle img-responsive img-center" width="90" src="images/money-bag.png" alt="">
                <h3>Aguinaldos</h3>
                <p>Modulo encargado de mostrar la lista de empleados actuales!</p>
                <p>
                    <a href="{!!URL::to('/aguinaldo')!!}" class="btn btn-primary center-block" role="button">Ingresar</a>
                </p>
            </div>
        </div>
        -->
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-4 text-center">
                <img class="img-circle img-responsive img-center" width="90" src="images/technology.png" alt="">
                <h3>Alquiler Motos</h3>
                <p>Modulo encargado de mostrar la lista de empleados actuales!</p>
                <p>
                    <a href="{!!URL::to('/motos')!!}" class="btn btn-primary center-block" role="button">Ingresar</a>
                </p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 text-center">
                <img class="img-circle img-responsive img-center" width="90" src="images/point-of-service.png" alt="">
                <h3>Cajas</h3>
                <p>Modulo encargado de mostrar la lista de empleados actuales!</p>
                <p>
                    <a href="{!!URL::to('/cajas')!!}" class="btn btn-primary center-block" role="button">Ingresar</a>
                </p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 text-center">
                <img class="img-circle img-responsive img-center" width="90" src="images/check.png" alt="">
                <h3>Salarios</h3>
                <p>Modulo encargado de mostrar la lista de empleados actuales!</p>
                <p>
                    <a href="{!!URL::to('/salariosEmpleados')!!}" class="btn btn-primary center-block" role="button">Ingresar</a>
                </p>
            </div>
        </div>
    </div>
@stop