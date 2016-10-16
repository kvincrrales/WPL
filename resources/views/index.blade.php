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
      {!!Html::style('css/login.css')!!}
      <!-- Custom CSS -->
   </head>
   <body>
   
      <div class="login-page">
         <div class="form">
            <h1>WIMOT</h1>
            {!!Form::open(['route'=>'log.store', 'method'=>'POST','class'=>'login-form'])!!}
            <div class="form-group">
               {!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa tu correo'])!!}
            </div>
            <div class="form-group">
               {!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa tu contraseña'])!!}
            </div>
            {!!Form::submit('ENTRAR')!!}
            {!!Form::close()!!}
            @include('alerts.errors')
         </div>
      </div>
      </div>
   </body>