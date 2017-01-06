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
        $users = DB::table('empleados')
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


        //$users = [0];
           

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


    public function calcularPlanilla(Request $data){

        $return['fechaI'] = $data['nInicio'];
        $return['fechaF'] = $data['nFinal'];

      //  $x = array();

        $consulta = DB::table('empleados')
            ->leftJoin('salarios', 'salarios.emp_id', '=', 'empleados.id')
            ->leftJoin('ahorros' ,'ahorros.emp_id', '=', 'empleados.id' )

            ->leftJoin('vacacions' ,'vacacions.emp_id', '=', 'empleados.id' )
            ->whereBetween('vacacions.fechaS', [$return['fechaI'], $return['fechaF'] ])

            ->leftJoin('prestamos' ,'prestamos.emp_id', '=', 'empleados.id' )
            ->whereBetween('prestamos.fSolicitud', [$return['fechaI'], $return['fechaF'] ])
            //->select('prestamos.*montoP', 'sum(*) as suma')


            ->leftJoin('vales' ,'vales.emp_id', '=', 'empleados.id' )
            ->whereBetween('vales.fSolicitud', [$return['fechaI'], $return['fechaF'] ])


            ->leftJoin('otra_deduccions' ,'otra_deduccions.emp_id', '=', 'empleados.id' )
            ->whereBetween('otra_deduccions.fSolicitud', [$return['fechaI'], $return['fechaF'] ])

            ->select(
                'empleados.id',
                'empleados.numId', 
                'empleados.nomb', 
                'empleados.cBanc', 
                'salarios.salarioM',
                'salarios.salarioS',
                'salarios.salarioHE',
                'salarios.salarioH',    
                'ahorros.montoS',
                'vacacions.diasD',
                'vales.total',
                'prestamos.montoP',
                'otra_deduccions.montoO')
            ->get();
            
        $consulta = $consulta[0];

    /*  $x['cedula,nombre,banco,salMensual,montoAhorro,enVacaciones,
        vales,prestamos,deducciones,caja,neto,total'] = 0;
    */

        $x['cedula'] = $consulta->numId;

        $x['nombre'] = $consulta->nomb;

        $x['banco'] = $consulta->cBanc;

        $x['salMensual'] = $consulta->salarioM;

        $x['montoAhorro'] = $consulta->montoS;

        $x['enVacaciones'] = $consulta->diasD;

        $x['vales'] = $consulta->total;

        $x['prestamos'] = $consulta->montoP;

        $x['deducciones'] = $consulta->montoO;

        $x['caja'] = $consulta->salarioH * 48 / 9.34;

        $x['neto'] = $consulta->salarioS - $x['montoAhorro'] - $x['vales'] - $x['prestamos'] - $x['deducciones'] - $x['caja'];

        $x['total'] = $consulta->salarioS - $x['montoAhorro'] - $x['vales'] - $x['prestamos'] - $x['deducciones'] - $x['caja'];


        return $x;
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
