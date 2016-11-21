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
            ->join('vacacions' ,'vacacions.emp_id', '=', 'empleados.id' )
            ->join('prestamos' ,'prestamos.emp_id', '=', 'empleados.id' )
            ->join('vales' ,'vales.emp_id', '=', 'empleados.id' )
            ->join('otra_deduccions' ,'otra_deduccions.emp_id', '=', 'empleados.id' )
            ->select(
                'empleados.id',
                'empleados.numId', 
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

        // sumar todos los datos 
        foreach ($users as $key => $u) {

            $u->total = $u->salarioM-3000;
        }


        return view('planillas',compact('users'));
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
                            ->select('salarioQ','salarioH','salarioHE')
                            ->where('emp_id',$data['id'])
                            ->get();

            // resultado a array
            $detalle = $detalle[0];


            $return['total'] = 0;


            $return['horasNormal'] = $data['nHorasN'] * $detalle->salarioH;

            $return['horasExtra'] = $data['nHorasE'] * $detalle->salarioHE;
            

            //sumar todo

            $return['total'] += $return['horasNormal'] + $return['horasExtra'];




        return $return;
    }

    public function downloadExcel($id)
    {
        //$data = \WP\Vacacion::get()->toArray(); --> Toda la lista
        
        $emp_id = \WP\Vacacion::find($id)->toArray();
        return Excel::create('accionPersonal', function($excel) use ($emp_id) {

            $excel->sheet('solicitudVacaciones', function($sheet) use ($emp_id)
            {
                //$sheet->cell('A2', function($cell){
                    //$cell->setValue('ID');});
                $sheet->fromArray($emp_id);
            });


        })->download('xls');
    }
}
