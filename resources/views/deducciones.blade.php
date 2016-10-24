@extends('layouts.principal')
@section('content')
 <div class="row">
            <div class="col-lg-12">
               <h2 class="page-header">Deducciones</h2>
            </div>
            <div class="col-md-12">
               <!-- Nav tabs -->
               <div class="card">
                  <ul class="nav nav-tabs" role="tablist">
                     <li role="presentation" class="active"><a href="#deducciones" aria-controls="home" role="tab" data-toggle="tab">Prestamos</a></li>
                     <li role="presentation"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Vales</a></li>
                     <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Otros</a></li>
                  </ul>
                   <div class="col-md-12">
                  <!-- Tab panes -->
                  <div class="tab-content">

                        <div role="tabpanel" class="tab-pane active" id="deducciones">
                           <br> 
                           <div class="row">
                              <div class="form-group">
                                 <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#modal">
                                      Nueva Deducción
                                    </button>
                              </div>
                              <table class="table table-striped" id="tblGrid">
                                 <thead id="tblHead">
                                    <tr>
                                       <th>Nombre del Empleado</th>
                                       <th>Fecha Inicio</th>
                                       <th>Fecha Final</th>
                                       <th>Monto</th>
                                       <th>Interes</th>
                                       <th>Plazo Semanal</th>
                                       <th>Cuota Semanal</th>
                                       <th>Total</th>
                                       <th>Nota</th>
                                       <th>Acciones</th>
                                    </tr>
                                 </thead>
                                 <tbody id="tabla">
                                    <tr>
                                       <td>Kevin Corrales</td>
                                       <td>17-10-2016</td>
                                       <td>17-11-2016</td>
                                       <td>100000</td>
                                       <td>10%</td>
                                       <td>4</td>
                                       <td>25000</td>
                                       <td>110000</td>
                                       <td>Para la casa</td>
                                       <td>
                                          <div class="btn-group">
                                             <button type="button" class="btn btn-danger">Seleccione</button>
                                             <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                             <span class="caret"></span>
                                             </button>
                                             <ul class="dropdown-menu" role="menu">
                                                <li><a>Eliminar</a></li>
                                                <li><a>Actualizar</a></li>
                                             </ul>
                                          </div>
                                       </td>
                                    </tr>
                                  
                                 </tbody>
                              </table>
                              <hr class="divisor">
                           </div>
                        </div>
                      <div role="tabpanel" class="tab-pane" id="home">
                          <div class="row">
                              <br>
                           <table class="table table-striped" id="tblGrid">
                              <thead id="tblHead">
                                 <tr>
                                       <th>ID Deduccion</th>
                                       <th>ID Empleado</th>
                                       <th>Nombre Empleado</th>
                                       <th>Descripción</th>
                                       <th>Salario Mensual</th>
                                       <th>Monto</th>
                                       <th>Nota</th>
                                       <th>Acciones</th>
                                 </tr>
                              </thead>
                              <tbody id="tabla">
                               
                              </tbody>
                           </table>
                           <hr class="divisor">
                        </div>
                      </div>
                     <div role="tabpanel" class="tab-pane" id="profile">
                        <br> 
                        <div class="row">
                           
                            <table class="table table-striped" id="tblGrid">
                              <thead id="tblHead">
                                 <tr>
                                    <th>Cédula</th>
                                    <th>Nombre</th>
                                    <th>Monto</th>
                                    <th>Interesés</th>
                                    <th>Fecha Inicio</th>
                                    <th>Fecha Final</th>
                                    <th>Acciones</th>
                                 </tr>
                              </thead>
                              <tbody id="tabla">
                                
                                 
                              </tbody>
                           </table>
                            
                           <hr class="divisor">
                        </div>
                     </div>
                      <div role="tabpanel" class="tab-pane" id="otros">
                        <br> 
                           
                          
                      </div>
                     
                   </div>
                   </div>
               </div>
            </div>
            <hr class="divisor">
         </div>

         <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <div class="col-sm-2">
                        <img src="images/wimot-logo.png" class="img-responsive" alt="Cinque Terre" width="120" height="120">
                     </div>
                     <h2 class="modal-title ">Nueva Deducción</h2>
                  </div>
            <form role="form" action="" name="frmDeducciones">
              <div class="modal-body">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="row">
                              <div class="col-sm-6 form-group">
                                 <label>ID Empleado: </label>
                                 <input name="numId"  type="text" class="form-control">
                              </div>
                              <div class="col-sm-6 form-group">
                                 <label>Nombre Empleado: </label>
                                 <input name="nomb" type="text"  class="form-control">
                              </div>
                              
                           </div>
                           <div class="row">
                              <div class="col-sm-4 form-group">
                                 <label>Tipo Deducción: </label>
                                 <select name="tipoD" class="form-control" >
                                       <option>C.C.S.S</option>
                                       <option>Vale</option>
                                       <option>Prestamo</option>
                                       <option>Otro</option>
                                    </select>
                              </div>
                              <div class="col-sm-4 form-group">
                                 <label>Salario Mensual: </label>
                                 <input name="salM"  type="text" class="form-control">
                              </div>
                              <div class="col-sm-4 form-group">
                                 <label>Monto Deducción: </label>
                                 <input name="montoD" type="text" class="form-control">
                              </div>
                              <div class="col-sm-4 form-group">
                                 <label>Notas: </label>
                                  <textarea name="notasD" placeholder="Digite notas a considerar" rows="3" class="form-control"></textarea>
                              </div>
                           </div>
                        </div>
                     </div>
               </div>
               <div class="modal-footer">
                     <p class="text-left">SISTEMA DE PLANILLAS WIMOT</p>
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                     <button value="guardar" type="submit" class="btn btn-success" >Guardar</button>
                  </div>
            </form>
            
          </div>
        </div>
      </div>
@stop