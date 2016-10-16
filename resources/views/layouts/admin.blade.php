<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>WIMOT</title>

      
      <!-- Bootstrap Core CSS -->
      {!!Html::style('css/bootstrap.min.css')!!}
      <!-- Custom CSS -->
      {!!Html::style('css/round-about.css')!!}
      <!-- Custom CSS -->
      
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
                  <li>
                     <a href="{!!URL::to('/empleados/create')!!}">Registrar Empleado</a>
                  </li>
                  <li>
                     <a href="#">Editar Empleado</a>
                  </li>
                  <li>
                     <a href="{!!URL::to('/empleados/show')!!}">Buscar Empleado</a>
                  </li>
                  <li>
                     <a href="{!!URL::to('/empleados')!!}">Lista de Empleados</a>
                  </li>
                  <li>
                     <a href="Deduccion.php">Deducciones</a>
                  </li>
                  <li>
                     <a href="Generar_Planilla.html">Planilla</a>
                  </li>
               </ul>
            </div>
            <!-- /.navbar-collapse -->
         </div>
         <!-- /.container -->
      </nav>
      <!-- Page Content -->
      <div class="container">
         <!-- Introduction Row -->
         <!--AQUI VA EL YIELD-->
         @yield('content')
         
        
         <!-- Footer -->
         <footer>
            <div class="row">
               <div class="col-lg-12">
                  <p>Copyright &copy; Repuestos WIMOT 2016</p>
               </div>
               <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
         </footer>
      </div>
      <!-- /.container -->
      <!-- jQuery -->
      {!!Html::script('js/jquery.js')!!}
      <!-- Bootstrap Core JavaScript -->
      {!!Html::script('js/bootstrap.min.js')!!}
   </body>
</html>