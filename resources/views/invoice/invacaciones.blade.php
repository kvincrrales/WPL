<!DOCTYPE HTML>
<html>
<html lang="en">
<head>
  <title>Recibo Vacacion</title>
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
    @foreach($emp_id as $vacacion)
      <h2 class="page-header">Acción de Personal</h2><a>Fecha de Solicitud: {{$vacacion -> fechaS}}</a>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Tipo de Vacaciones</th>
            <th>Fecha de Solicitud</th>
            <th>Fecha Inicio</th>
            <th>Fecha Final</th>
            <th>Días Disfrutados</th>
            <th>C.C.S.S</th>
            <th>Total</th>
          </tr>
        </thead>
        <br>
        <tbody>

         <tr>
          <td>{{$vacacion -> nomb}}</td>
          <td>{{$vacacion -> tVacaciones}}</td>
          <td>{{$vacacion -> fechaS}}</td>
          <td>{{$vacacion -> fechaIni}}</td>
          <td>{{$vacacion -> fechaFin}}</td>
          <td>{{$vacacion -> diasD}}</td>
          <td>{{$vacacion -> caja}}</td>
          <td>{{$vacacion -> total}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</body>
</html>