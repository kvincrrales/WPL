<!DOCTYPE HTML>
<html>
<html lang="en">
<head>
  <title>Recibo Vale</title>
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
      @foreach($emp_id as $vale)
     <h2 class="page-header">Recibo del Vale</h2><a>Fecha de Solicitud: {{$vale -> fSolicitud}}</a>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Nombre Cédula</th>
            <th>Moneda</th>
            <th>Monto</th>
            <th>Intereses</th>
            <th>Total</th>
         </tr>
      </thead>
      <br>
      <tbody>
       
         <tr>
            <td>{{$vale -> nombE}}</td>
            <td>{{$vale -> moneda}}</td>
            <td>{{$vale -> montoV}}</td>
            <td>% {{$vale -> interes}}</td>
            <td>{{$vale -> total}}</td>
         </tr>
         @endforeach
      </tbody>
   </table>
</div>
</div>
</body>
</html>