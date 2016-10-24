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
                <img class="img-circle img-responsive img-center" width="90" src="images/update.png" alt="">
                <h3>Editar Empleado</h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
                <p>
                    <a href="#" class="btn btn-primary center-block" role="button">Ingresar</a>
                </p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 text-center">
                <img class="img-circle img-responsive img-center" width="90" src="images/binoculars.png" alt="">
                <h3>Buscar Empleado</h3>
                <p>Modulo encargado de mostrar todos los datos del empleado!</p>
                <p>
                    <a href="{!!URL::to('/empleados/show')!!}" class="btn btn-primary center-block" role="button">Ingresar</a>
                </p>
            </div>
        </div>
            <hr class="divisor">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-4 text-center">
                <img class="img-circle img-responsive img-center" width="90" src="images/contacts.png" alt="">
                <h3>Lista de Empleados</h3>
                <p>Modulo encargado de mostrar la lista de empleados actuales!</p>
                <p>
                    <a href="{!!URL::to('/empleados')!!}" class="btn btn-primary center-block" role="button">Ingresar</a>
                </p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 text-center">
                <img class="img-circle img-responsive img-center" width="90" src="images/abacus.png" alt="">
                <h3>Deducciones</h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
                <p>
                    <a href="{!!URL::to('/deducciones')!!}" class="btn btn-primary center-block" role="button">Ingresar</a>
                </p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 text-center">
                <img class="img-circle img-responsive img-center" width="90" src="images/calendar.png" alt="">
                <h3>Planillas</h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
                <p>
                    <a href="Planillas.php" class="btn btn-primary center-block" role="button">Ingresar</a>
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
                    <a href="#" class="btn btn-primary center-block" role="button">Ingresar</a>
                </p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 text-center">
                <img class="img-circle img-responsive img-center" width="90" src="images/stapler.png" alt="">
                <h3>Departamentos y Puestos</h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
                <p>
                    <a href="{!!URL::to('/dept')!!}" class="btn btn-primary center-block" role="button">Ingresar</a>
                </p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 text-center">
                <img class="img-circle img-responsive img-center" width="90" src="images/sunbed.png" alt="">
                <h3>Vacaciones</h3>
                <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
                <p>
                    <a href="#" class="btn btn-primary center-block" role="button">Ingresar</a>
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
                    <a href="Ahorros.php" class="btn btn-primary center-block" role="button">Ingresar</a>
                </p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 text-center">
                <img class="img-circle img-responsive img-center" width="90" src="images/money-bag.png" alt="">
                <h3>Aguinaldos</h3>
                <p>Modulo encargado de mostrar la lista de empleados actuales!</p>
                <p>
                    <a href="#" class="btn btn-primary center-block" role="button">Ingresar</a>
                </p>
            </div>
           
            
        </div>
        </div>
@stop