<?php

namespace WP\Http\Controllers;

use Illuminate\Http\Request;

use WP\Http\Requests;
use Session;
use Redirect;
use WP\Empleado;
use DB;

class SalariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = DB::table('empleados')
            ->join('salarios', 'salarios.emp_id', '=', 'empleados.id')
            ->select(
                'empleados.nomb',
                'salarios.id',
                'salarios.salarioM',
                'salarios.salarioQ',
                'salarios.salarioS',
                'salarios.salarioD',
                'salarios.salarioH',
                'salarios.salarioHE')
            ->get();


        $sal = \WP\Salario::paginate(3);
        return view('salarios.lista',compact('sal','users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $emp = Empleado::pluck('id','nomb');

        return view('salarios.crear',compact('emp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         \WP\Salario::create([
            'emp_id' => $request['emp_id'],
            'salarioM' => $request['salarioM'],
            'salarioQ' => $request['salarioQ'],
            'salarioS' => $request['salarioS'],
            'salarioD' => $request['salarioD'],
            'salarioH' => $request['salarioH'],
            'salarioHE' => $request['salarioHE'],
        ]);

       Session::flash('message','Salario Ingresado Correctamente');
        return Redirect::to('/salarios');
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
        $sal = \WP\Salario::find($id);
        return view ('salarios.editar',['sal'=>$sal]);
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
        $sal = \WP\Salario::find($id);
        $sal -> fill($request->all());
        $sal -> save();

        Session::flash('message','Salario Editado Correctamente');
        return Redirect::to('/salarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \WP\Salario::destroy($id);
        Session::flash('message','Salario Eliminado Correctamente');
        return Redirect::to('/salarios');
    }

    /**
     * [calcularSalarios description]
     * @param  [int] $salario [Valor base para calcular los demas salarios]
     * @return [type]          [description]
     * @autor Alexis Ramos Mora 
     */
    public function calcularSalarios(Request $request){

        $response = array();

        $val = $request['salario'];

        // calcula el salario quinenal.
        
        $response['salarioQuincenal'] = $val/2;


        // semanal
        $response['salarioSemanal'] = $val/4;

        // diario
        $response['salarioDiario'] = $val/26;


        $response['salarioHora'] = $response['salarioDiario']/8;

        $response['salarioExtra'] = $response['salarioHora']*1.5+$response['salarioHora'];

        return $response;

        
    }
}
