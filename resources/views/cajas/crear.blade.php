@extends('layouts.admin')

@section('content')
     <meta name="csrf-token" content="{{ csrf_token() }}">
 <!-- Team Members Row -->
         <div class="row">
            <div class="col-lg-12">
               <h2 class="page-header">Reporte Diario Cierre de Caja</h2>
            </div>
             <!-- 'route'=>'empleado.store' empleado es como se llama la ruta en routes -->

             <!--Revisar quitar tipo de planilla para manejarlo en puestos-->
               <br>
               <div class="row">
                  <div class="form-group col-sm-6">
                     {!!Form::label('Fecha: ')!!}
                     {!!Form::date('fecha',null,['class'=>'form-control'])!!}
                  </div>
               </div>
               {!!Form::label('Depositos Pendientes: ')!!}
               <div class="row">
                  <div class="form-group col-sm-3">
                  
                     {!!Form::text('nomb1',null,['class'=>'form-control','placeholder'=>'No','value'=>'0','id' => 'nomb1'])!!}
                  </div>
                  <div class="form-group col-sm-3">
                     {!!Form::text('nomb2',null,['class'=>'form-control','placeholder'=>'₡','value'=>'0','id' => 'nomb2'])!!}
                  </div>
                  <div class="form-group col-sm-3">
                  {!!Form::label('Cheque BNCR: ')!!}
                     {!!Form::text('nomb3',null,['class'=>'form-control','placeholder'=>'No','value'=>'0','id' => 'nomb3'])!!}
                  </div>
                  <div class="form-group col-sm-3">
                  {!!Form::label('Cheque: ')!!}
                     {!!Form::text('nomb4',null,['class'=>'form-control','placeholder'=>'₡','value'=>'0','id' => 'nomb4'])!!}
                  </div>
               </div>
               {!!Form::label('Depositos en Efectivo: ')!!}
               <div class="row">
                  <div class="form-group col-sm-3">
                 
                     {!!Form::text('nomb5',null,['class'=>'form-control','placeholder'=>'No','value'=>'0','id' => 'nomb5'])!!}
                  </div>
                  <div class="form-group col-sm-3">
                     {!!Form::text('nomb6',null,['class'=>'form-control','placeholder'=>'₡','value'=>'0','id' => 'nomb6'])!!}
                  </div>
                  <div class="form-group col-sm-3">
                     {!!Form::text('nomb7',null,['class'=>'form-control','placeholder'=>'No','value'=>'0','id' => 'nomb7'])!!}
                  </div>
                  <div class="form-group col-sm-3">
                     {!!Form::text('nomb8',null,['class'=>'form-control','placeholder'=>'₡','value'=>'0','id' => 'nomb8'])!!}
                  </div>
               </div>
               <div class="row">
                  <div class="form-group col-sm-3">
                     {!!Form::text('nomb9',null,['class'=>'form-control','placeholder'=>'No','value'=>'0','id' => 'nomb9'])!!}
                  </div>
                  <div class="form-group col-sm-3">
                     {!!Form::text('nomb10',null,['class'=>'form-control','placeholder'=>'₡','value'=>'0','id' => 'nomb10'])!!}
                  </div>
                  <div class="form-group col-sm-3">
                  {!!Form::label('Otros Cheques: ')!!}
                     {!!Form::text('nomb11',null,['class'=>'form-control','placeholder'=>'No','value'=>'0','id' => 'nomb11'])!!}
                  </div>
                  <div class="form-group col-sm-3">
                  {!!Form::label('Cheque: ')!!}
                     {!!Form::text('nomb12',null,['class'=>'form-control','placeholder'=>'₡','value'=>'0','id' => 'nomb12'])!!}
                  </div>
               </div>
               <div class="row">
                  <div class="form-group col-sm-3">
                     {!!Form::text('nomb13',null,['class'=>'form-control','placeholder'=>'No','value'=>'0','id' => 'nomb13'])!!}
                  </div>
                  <div class="form-group col-sm-3">
                     {!!Form::text('nomb14',null,['class'=>'form-control','placeholder'=>'₡','value'=>'0','id' => 'nomb14'])!!}
                  </div>
                   <div class="form-group col-sm-3">
                     {!!Form::text('nomb15',null,['class'=>'form-control','placeholder'=>'No','value'=>'0','id' => 'nomb15'])!!}
                  </div>
                  <div class="form-group col-sm-3">
                     {!!Form::text('nomb16',null,['class'=>'form-control','placeholder'=>'₡','value'=>'0','id' => 'nomb16'])!!}
                  </div>
               </div>
               <div class="row">
               <div class="form-group col-sm-3">
                     {!!Form::text('nomb17',null,['class'=>'form-control','placeholder'=>'No','value'=>'0','id' => 'nomb17'])!!}
                  </div>
                  <div class="form-group col-sm-3">
                     {!!Form::text('nomb18',null,['class'=>'form-control','placeholder'=>'₡','value'=>'0','id' => 'nomb18'])!!}
                  </div>
                  <div class="form-group col-sm-3">
                  {!!Form::label('Voucher Visa: ')!!}
                     {!!Form::text('nomb19',null,['class'=>'form-control','placeholder'=>'₡','value'=>'0','id' => 'nomb19'])!!}
                  </div>
                  <div class="form-group col-sm-3">
                  {!!Form::label('Bac-Credomatic: ')!!}
                     {!!Form::text('nomb20',null,['class'=>'form-control','placeholder'=>'₡','value'=>'0','id' => 'nomb20'])!!}
                  </div>
               </div>
                {!!Form::label('Recibos de Dinero: ')!!}
               <div class="row">
                 <div class="form-group col-sm-3">
                 
                     {!!Form::text('nomb21',null,['class'=>'form-control','placeholder'=>'No','value'=>'0','id' => 'nomb21'])!!}
                  </div>
                  <div class="form-group col-sm-3">
                     {!!Form::text('nomb22',null,['class'=>'form-control','placeholder'=>'₡','value'=>'0','id' => 'nomb22'])!!}
                  </div>
                  <div class="form-group col-sm-3">
                  {!!Form::label('Voucher Banco Nacional: ')!!}
                     {!!Form::text('nomb23',null,['class'=>'form-control','placeholder'=>'₡','value'=>'0','id' => 'nomb23'])!!}
                  </div>
                  <div class="form-group col-sm-3">
                  {!!Form::label('Tasa Cero: ')!!}
                     {!!Form::text('nomb24',null,['class'=>'form-control','placeholder'=>'₡','value'=>'0','id' => 'nomb24'])!!}
                  </div>
               </div>
               <div class="row">
                  <div class="form-group col-sm-6">
                     {!!Form::text('nomb25',null,['class'=>'form-control','placeholder'=>'Detalle','value'=>'0','id' => 'nomb25'])!!}
                  </div>
                  <div class="form-group col-sm-6">
                  {!!Form::label('Total del Día: ')!!}
                     {!!Form::text('nomb26',null,['class'=>'form-control','placeholder'=>'₡','value'=>'0','id' => 'nomb26'])!!}
                  </div>
               </div>
               <div class="row">
                 <div class="form-group col-sm-3">
                     {!!Form::text('nomb27',null,['class'=>'form-control','placeholder'=>'No','value'=>'0','id' => 'nomb27'])!!}
                  </div>
                  <div class="form-group col-sm-3">
                     {!!Form::text('nomb28',null,['class'=>'form-control','placeholder'=>'₡','value'=>'0','id' => 'nomb28'])!!}
                  </div>
                  <div class="form-group col-sm-6">
                  {!!Form::label('Total Procesado: ')!!}
                     {!!Form::text('nomb29',null,['class'=>'form-control','placeholder'=>'₡','value'=>'0','id' => 'nomb29'])!!}
                  </div>
               </div>
               <div class="row">
                  <div class="form-group col-sm-6">
                     {!!Form::text('nomb30',null,['class'=>'form-control','placeholder'=>'Detalle','value'=>'0','id' => 'nomb30'])!!}
                  </div>
                  <div class="form-group col-sm-6">
                  {!!Form::label('Diferencia: ')!!}
                     {!!Form::text('nomb31',null,['class'=>'form-control','placeholder'=>'₡','value'=>'0','id' => 'nomb31'])!!}
                  </div>
               </div>
               <div class="row">
                 <div class="form-group col-sm-3">
                     {!!Form::text('nomb32',null,['class'=>'form-control','placeholder'=>'No','value'=>'0','id' => 'nomb32'])!!}
                  </div>
                  <div class="form-group col-sm-3">
                     {!!Form::text('nomb33',null,['class'=>'form-control','placeholder'=>'₡','value'=>'0','id' => 'nomb33'])!!}
                  </div>
               </div>
                <div class="row">
                  <div class="form-group col-sm-6">
                     {!!Form::text('nomb34',null,['class'=>'form-control','placeholder'=>'Detalle','value'=>'0','id' => 'nomb34'])!!}
                  </div>
               </div>
                              <div class="row">
                 <div class="form-group col-sm-3">
                     {!!Form::text('nomb35',null,['class'=>'form-control','placeholder'=>'No','value'=>'0','id' => 'nomb35'])!!}
                  </div>
                  <div class="form-group col-sm-3">
                     {!!Form::text('nomb36',null,['class'=>'form-control','placeholder'=>'₡','value'=>'0','id' => 'nomb36'])!!}
                  </div>
               </div>
                <div class="row">
                  <div class="form-group col-sm-6">
                     {!!Form::text('nomb37',null,['class'=>'form-control','placeholder'=>'Detalle','value'=>'0','id' => 'nomb37'])!!}
                  </div>
               </div>
                              <div class="row">
                 <div class="form-group col-sm-3">
                     {!!Form::text('nomb38',null,['class'=>'form-control','placeholder'=>'No','value'=>'0','id' => 'nomb38'])!!}
                  </div>
                  <div class="form-group col-sm-3">
                     {!!Form::text('nomb39',null,['class'=>'form-control','placeholder'=>'₡','value'=>'0','id' => 'nomb39'])!!}
                  </div>
               </div>
                <div class="row">
                  <div class="form-group col-sm-6">
                     {!!Form::text('nomb40',null,['class'=>'form-control','placeholder'=>'Detalle','value'=>'0','id' => 'nomb40'])!!}
                  </div>
               </div>
               <div class="row">
                 <div class="form-group col-sm-4">
                  {!!Form::label('Transferencia: ')!!}
                     {!!Form::text('nomb41',null,['class'=>'form-control','placeholder'=>'No','value'=>'0','id' => 'nomb41'])!!}
                  </div>
                  <div class="form-group col-sm-4">
                  {!!Form::label('Monto: ')!!}
                     {!!Form::text('nomb42',null,['class'=>'form-control','placeholder'=>'₡','value'=>'0','id' => 'nomb42'])!!}
                  </div>
                  <div class="form-group col-sm-4">
                  {!!Form::label('Banco: ')!!}
                     {!!Form::text('nomb43',null,['class'=>'form-control','placeholder'=>'Banco','value'=>'0','id' => 'nomb43'])!!}
                  </div>
               </div>
               <div class="row">
                 <div class="form-group col-sm-4">
                     {!!Form::text('nomb44',null,['class'=>'form-control','placeholder'=>'No','value'=>'0','id' => 'nomb44'])!!}
                  </div>
                  <div class="form-group col-sm-4">
                     {!!Form::text('nomb45',null,['class'=>'form-control','placeholder'=>'₡','value'=>'0','id' => 'nomb45'])!!}
                  </div>
                  <div class="form-group col-sm-4">
                     {!!Form::text('nomb46',null,['class'=>'form-control','placeholder'=>'Banco','value'=>'0','id' => 'nomb46'])!!}
                  </div>
               </div>
               <div class="row">
                 <div class="form-group col-sm-4">
                     {!!Form::text('nomb47',null,['class'=>'form-control','placeholder'=>'No','value'=>'0','id' => 'nomb47'])!!}
                  </div>
                  <div class="form-group col-sm-4">
                     {!!Form::text('nomb48',null,['class'=>'form-control','placeholder'=>'₡','value'=>'0','id' => 'nomb48'])!!}
                  </div>
                  <div class="form-group col-sm-4">
                     {!!Form::text('nomb49',null,['class'=>'form-control','placeholder'=>'Banco','value'=>'0','id' => 'nomb49'])!!}
                  </div>
               </div>
               <div class="row">
                 <div class="form-group col-sm-4">
                     {!!Form::text('nomb50',null,['class'=>'form-control','placeholder'=>'No','value'=>'0','id' => 'nomb50'])!!}
                  </div>
                  <div class="form-group col-sm-4">
                     {!!Form::text('nomb51',null,['class'=>'form-control','placeholder'=>'₡','value'=>'0','id' => 'nomb51'])!!}
                  </div>
                  <div class="form-group col-sm-4">
                     {!!Form::text('nomb52',null,['class'=>'form-control','placeholder'=>'Banco','value'=>'0','id' => 'nomb52'])!!}
                  </div>
               </div>
               <div class="row">
                 <div class="form-group col-sm-12">
                 {!!Form::label('Otros: ')!!}
                     {!!Form::text('nomb53',null,['class'=>'form-control','placeholder'=>'Otros','value'=>'0','id' => 'nomb53'])!!}
                  </div>
               </div>
               <br>
               <div class="footer">
                  <button type="button" class="btn btn-danger">Cerrar</button>
                  {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
               </div>
               {!!Form::close()!!}
            <hr class="divisor">
         </div>
             {!!Html::script('js/jquery.js')!!}

            {!!Html::script('js/cajas.js')!!}
@stop