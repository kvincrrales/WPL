<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <meta name="author" content="">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>WIMOT</title>
   <link rel="icon" href="{!! asset('images/tools.png') !!}"/>
   <!-- Bootstrap Core CSS -->
   {!!Html::style('css/bootstrap.min.css')!!}
   <!-- Custom CSS -->
   {!!Html::style('css/round-about.css')!!}
   <!-- Bootstrap Core CSS -->
   {!!Html::style('css/style.css')!!}

   {!!Html::style('css/jquery-ui.css')!!}
</head>
<body>
   <!-- Navigation -->
   <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{!!URL::to('/modulos')!!}">WIMOT</a>
         </div>
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
               <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Empleados
                     <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="{!!URL::to('/empleados/create')!!}">Registrar Empleado</a></li>
                        <li><a href="{!!URL::to('/empleados')!!}">Lista de Empleados</a></li>
                     </ul>
                  </li>
                  <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">Departamentos y Puestos
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                           <li><a href="{!!URL::to('/departamentos/create')!!}">Registrar Departamento</a></li>
                           <li><a href="{!!URL::to('/departamentos')!!}">Lista Departamentos</a>
                           </li>
                           <li><a href="{!!URL::to('/puestos/create')!!}">Registrar Puesto</a></li>
                           <li><a href="{!!URL::to('/puestos')!!}">Lista de Puestos</a>
                           </li>
                        </ul>
                     </li>
                     <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Deducciones
                           <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <li><a href="#">Prestamos</a></li>
                              <li><a href="#">Vales</a>
                                 <li><a href="#">Otros</a>
                                 </li>
                              </ul>
                           </li>
                           <li class="dropdown">
                              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Ahorros
                                 <span class="caret"></span></a>
                                 <ul class="dropdown-menu">
                                    <li><a href="{!!URL::to('/ahorros/create')!!}">Registrar Ahorro</a></li>
                                    <li><a href="{!!URL::to('/ahorros')!!}">Lista de Ahorros</a></li>
                                 </ul>
                              </li>
                              <li class="dropdown">
                                 <a class="dropdown-toggle" data-toggle="dropdown" href="#">Incapacidades
                                    <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                       <li><a href="{!!URL::to('/incapacidades/create')!!}">Registrar Incapacidad</a></li>
                                       <li><a href="{!!URL::to('/incapacidades')!!}">Lista de Incapacidades</a></li>
                                    </ul>
                                 </li>
                                 <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Vacaciones
                                       <span class="caret"></span></a>
                                       <ul class="dropdown-menu">
                                          <li><a href="{!!URL::to('/vacaciones/create')!!}">Registrar Vacaciones</a></li>
                                          <li><a href="{!!URL::to('/vacaciones')!!}">Lista de Vacaciones</a></li>
                                       </ul>
                                    </li>
                  <!--
                  <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">Usuarios
                     <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="{!!URL::to('/usuario/create')!!}">Crear Usuario</a></li>
                        <li><a href="{!!URL::to('/usuario')!!}">Lista de Usuarios</a>
                        </li>
                     </ul>
                  </li>
               -->
            </ul>
            <ul class="nav navbar-nav navbar-right">
               <li><a href="#"><span class="glyphicon glyphicon-user"></span> {!!Auth::user()->name!!}</a></li>
               <li><a href="{!!URL::to('/logout')!!}"><span class="glyphicon glyphicon-log-in"></span> Salir</a></li>
            </ul>
         </div>
         <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
   </nav>
   <!-- Page Content -->
   <div class="container">

      @yield('content')
      <!-- Footer -->
      <footer>
         <div class="row">
            <div class="text-center">
               <p>Copyright &copy; Repuestos WIMOT 2017</p>
            </div>
            <!-- /.col-lg-12 -->
         </div>
         <!-- /.row -->
      </footer>
   </div>
   <!-- /.container -->
   <!-- jQuery -->
   {!!Html::script('js/jquery.js')!!}
   {!!Html::script('js/bootstrap.min.js')!!}
   {!!Html::script('js/jquery.js')!!}
   <!-- jQuery Validation -->
   {!!Html::script('js/jquery-validate.js')!!}
   {!!Html::script('js/Planillas/validaciones.js')!!}
   {!!Html::script('js/Planillas/planillas.js')!!}
</body>
</html>