<table class="table table-striped" id="tblGrid">
    <thead id="tblHead">
      <tr>
        <th>Cédula</th>
        <th>Nombre</th>
        <th>Cuenta</th>
        <th>Salario</th>
        <th>Horas</th>
        <th>Horas Extra</th>
        <th>Vacaciones</th>
        <th>C.C.S.S</th>
        <th>Prestamos</th>
        <th>Vales</th>
        <th>Otros</th>
        <th>Salario Neto</th>
        <th>Ahorros</th>
        <th>Total</th>
        <th>Totales</th>
      </tr>
    </thead>
      @foreach($valores as $product)
    <tbody>
      <tr>
        <td><span id="cedula"></span>{{$product->numId}}</td>
        <td><span id="nombre"></span></td>
        <td><span id="banco"></span></td>
        <td><span id="salario"></span></td>
        <td><span id="horas">{!!Form::number('hora',48,['class'=>'form-control foo','id'=>'horas'])!!}</span></td>
        <td><span id="horasExtra">{!!Form::number('hora',0,['class'=>'form-control foo','id'=>'horas'])!!}</span></td>
        <td><span id="vacaciones"></span></td>
        <td><span id="caja"></span></td>
        <td><span id="prestamos"></span></td>
        <td><span id="vales"></span></td>
        <td><span id="deducciones"></span></td>
        <td><span id="neto"></span></td>
        <td><span id="ahorros"></span></td>
        <td><span id="total"></span></td>
        <td><span id="totales"></span></td>
      </tr>
    </tbody>
      @endforeach
    <tr>
      <th scope="row">TOTAL</th>
      <td><strong></strong></td>
      <td><strong></strong></td>
      <td><strong></strong></td>
      <td><strong></strong></td>
      <td><strong></strong></td>
      <td><strong></strong></td>
      <td><strong></strong></td>
      <td><strong></strong></td>
      <td><strong></strong></td>
      <td><strong></strong></td>
      <td><strong></strong></td>
      <td><strong></strong></td>
      <td><strong></strong></td>
      <td><strong></strong></td>
    </tr>
  </table>