<!DOCTYPE HTML>
<html>
<html lang="en">
<head>
  <title>Lista de Empleados</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <style>
   body{
    font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    text-align:center;
    color:#777;
  }

  body h1{
    font-weight:300;
    margin-bottom:0px;
    padding-bottom:0px;
    color:#000;
  }

  body h3{
    font-weight:300;
    margin-top:10px;
    margin-bottom:20px;
    font-style:italic;
    color:#555;
  }

  body a{
    color:#06F;
  }


</style>

</head>
<body>
  <div class="">
    <div class="col-lg-12">

    <h2 class="page-header">Listado General de Empleados</h2><a>Fecha de Solicitud:12-12-12</a>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Cédula</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Fecha de Ingreso</th>
            <th>Salario Mensual</th>
            <th>Vacaciones por Año</th>
          </tr>
        </thead>
        <br>
        <tbody>
          @foreach($emp_id as $empleado)
          <tr>
            <td>{{$empleado -> numId}}</td>
            <td>{{$empleado -> nomb}}</td>
            <td>{{$empleado -> ape1}} {{$empleado -> ape2}}</td>
            <td>{{$empleado -> fIngreso}}</td>
            <td>{{$empleado -> salario}}</td>
            <td>{{$empleado -> totalVacaciones}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>