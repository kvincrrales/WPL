<?php
namespace WP\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use Redirect;
use WP\Empleado;
use WP\Salario;
use DB;
class PlanillasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $data)
    {
     $consulta = DB::table('empleados')
     ->leftJoin('salarios', 'salarios.emp_id', '=', 'empleados.id')
     ->leftJoin('ahorros' ,'ahorros.emp_id', '=', 'empleados.id' )
     ->leftJoin('vacacions' ,'vacacions.emp_id', '=', 'empleados.id' )
     ->leftJoin('prestamos' ,'prestamos.emp_id', '=', 'empleados.id' )
     ->leftJoin('vales' ,'vales.emp_id', '=', 'empleados.id' )
     ->leftJoin('otra_deduccions' ,'otra_deduccions.emp_id', '=', 'empleados.id' )
     ->select(
        'empleados.id',
        'empleados.numId', 
        'empleados.nomb', 
        'empleados.cBanc',
        'salarios.salarioD', 
        'salarios.salarioS',
        'salarios.salarioHE',
        'salarios.salarioH',    
        'ahorros.montoS',
        'vacacions.diasD',
        'vacacions.total as totalVacas',
        'vales.total as totalVales',
        'prestamos.montoP',
        'otra_deduccions.montoO')
     ->get();
     $vacaciones = DB::table('vacacions')->sum('total');
     $salarios = DB::table('salarios')->sum('salarioS');
     $ahorros = DB::table('ahorros')->sum('montoS');
     $vales = DB::table('vales')->sum('total');
     $prestamos = DB::table('prestamos')->sum('montoP');
     $deducciones = DB::table('otra_deduccions')->sum('montoO');    

      $sumCaja = 0;
       $sumNeto = 0;
        $sumTotal = 0;

     foreach ($consulta as $key => $u) {

        $u->caja = round($u->salarioS * 0.0934);

         if(isset($u->caja))
        $sumCaja += $u->caja;

        $u->neto = round($u->salarioS + $u->salarioD * $u->diasD - $u->totalVales - $u->montoP - $u->montoO - $u->caja);

          if(isset($u->neto))
        $sumNeto += $u->neto;

        $u->totales = round($u->neto - $u->montoS);

          if(isset($u->totales))
        $sumTotal += $u->totales;
    }

    return view('planillas',compact('consulta','salarios','vacaciones','ahorros','vales','prestamos','deducciones','sumCaja','sumNeto','sumTotal'));
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function reCalcularSalario(Request $data){
        $return = array();

        $detalle = DB::table('salarios')
        ->select('salarioS','salarioH','salarioHE')
        ->where('emp_id',$data['id'])
        ->get();
            // resultado a array
        $detalle = $detalle[0];
        $return['totales'] = 0;
        $return['horasNormal'] = $data['nHorasN'] * $detalle->salarioH;
        $return['horasExtra'] = $data['nHorasE'] * $detalle->salarioHE;

            //sumar todo
        $return['totales'] += $return['horasNormal'] + $return['horasExtra'];


        return $return;
    }

    public function fecha(Request $data){
       // $return['inicioG'] = $data['nInicio'];
       // $return['finalG'] = $data['nFinal'];
        $valores = array();

        $return['fechaI'] = $data['nInicio'];
        $return['fechaF'] = $data['nFinal'];
        //  $x = array();
        $valores['caja'] = round($consulta->salarioS * 0.0934);

        $valores['neto'] = round($consulta->salarioS + $valores['enVacaciones'] * $consulta->salarioD  = $consulta->diasD  - $valores['vales'] - $valores['prestamos'] - $valores['deducciones'] - $valores['caja'] );


        $valores['total'] = round($consulta->salarioS - $valores['montoAhorro'] - $valores['vales'] - $valores['prestamos'] - $valores['deducciones'] - $valores['caja']);


        return $valores;

    }
}