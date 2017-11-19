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
    @foreach($emp_id as $ahorro)
      <h2 class="page-header">Acción de Personal</h2><a>Fecha de Solicitud:</a>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Monto Semanal</th>
            <th>Monto Actual</th>
            <th>Nota</th>
          </tr>
        </thead>
        <br>
        <tbody>

         <tr>
          <td>{{$ahorro -> nomb}}</td>
          <td>{{$ahorro -> montoS}}</td>
          <td>{{$ahorro -> montoA}}</td>
          <td>{{$ahorro -> nota}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</body>
</html>