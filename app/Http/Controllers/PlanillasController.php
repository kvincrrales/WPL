<?php
namespace WP\Http\Controllers;
use Illuminate\Http\Request;
use WP\Http\Requests;
use WP\Http\Controllers\Controller;
use Session;
use Redirect;
use WP\Empleado;
use WP\Salario;
use WP\Planilla;
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

    public function insert(Request $request){

        foreach ($request->id as $key => $v){

            $data = array(
                'emp_id'=>$request->id[$key], 
                'emp_ced'=>$request->cedula [$key], 
                'emp_nomb'=>$request->nombre [$key], 
                'emp_banc'=>$request->banco [$key], 
                'emp_sal'=>$request->salario [$key], 
                'emp_hN'=>$request->horasNormal [$key], 
                'emp_hE'=>$request->horasExtra [$key], 
                'emp_vac'=>$request->vacaciones [$key], 
                'emp_caj'=>$request->caja [$key], 
                'emp_pre'=>$request->prestamos [$key], 
                'emp_val'=>$request->vales [$key],
                'emp_ded'=>$request->deducciones [$key], 
                'emp_aho'=>$request->ahorros [$key], 
                'emp_net'=>$request->neto [$key], 
                'emp_tot'=>$request->totales [$key]);
            Planilla::insert($data); 
        }
        Session::flash('message','Planilla Ingresada Correctamente');
        
        return back();
    }


}