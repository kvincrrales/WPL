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
    public function index()
    {
        $users = DB::table('empleados')
            ->join('salarios', 'salarios.emp_id', '=', 'empleados.id')
            ->join('ahorros' ,'ahorros.emp_id', '=', 'empleados.id' )
            ->leftJoin('vacacions' ,'vacacions.emp_id', '=', 'empleados.id' )
            ->leftJoin('prestamos' ,'prestamos.emp_id', '=', 'empleados.id' )
            ->leftJoin('vales' ,'vales.emp_id', '=', 'empleados.id' )
            ->leftJoin('otra_deduccions' ,'otra_deduccions.emp_id', '=', 'empleados.id' )

            ->select(
                'empleados.id', 
                'empleados.nomb', 
                'empleados.cBanc', 
                'salarios.salarioM',
                'salarios.salarioHE',
                'salarios.salarioH',
                'ahorros.montoS',
                'vacacions.diasD',
                'vales.total',
                'prestamos.montoP',
                'otra_deduccions.montoO')
            ->get();

         $salarios = DB::table('salarios')->sum('salarioM');
         $ahorros = DB::table('ahorros')->sum('montoS');
         $vales = DB::table('vales')->sum('total');
         $prestamos = DB::table('prestamos')->sum('montoP');
         $deducciones = DB::table('otra_deduccions')->sum('montoO');
        // sumar todos los datos 
        foreach ($users as $key => $u) {
            $u->total = $u->salarioM-3000;
        }
        return view('planillas',compact('users','salarios','ahorros','vales','prestamos','deducciones'));
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

    public function prueba(Request $data){

        $tracks = $data;

        foreach ($tracks as $track){ 

        Playlist::create(array ($track));  //casting object to array

        }
    }
    public function reCalcularSalario(Request $data){
        $return = array();
            $detalle = DB::table('salarios')
                            ->select('salarioQ','salarioH','salarioHE','salarioS')
                            ->where('emp_id',$data['id'])
                            ->get();
            // resultado a array
            $detalle = $detalle[0];
            $return['total'] = 0;
            $return['horasNormal'] = $data['nHorasN'] * $detalle->salarioH;
            $return['horasExtra'] = $data['nHorasE'] * $detalle->salarioHE;

            $return['caja'] = round($detalle->salarioS * 0.0934);

            $return['neto'] = round($detalle->salarioH * 48 / 9.34);

            //sumar todo
            $return['total'] += $return['horasNormal'] + $return['horasExtra'];

        return $return;
    }
}