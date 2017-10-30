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
        $sal = \WP\Salario::paginate(7);
        return view('salarios.lista',compact('sal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $emp = Empleado::select(DB::raw("CONCAT(nomb,' ',ape1,' ',ape2,' ',numId) AS nomC, id"))->pluck('id', 'nomC');

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
         \WP\Salario::create($request->all());

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
        $emp = Empleado::select(DB::raw("CONCAT(nomb,' ',ape1,' ',ape2,' ',numId) AS nomC, id"))->pluck('id', 'nomC');
        $sal = \WP\Salario::find($id);
        return view ('salarios.editar',compact('emp'),['sal'=>$sal]);
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


    public function calcularSalarios(Request $request){

        $response = array();

        $val = $request['salario'];

        // calcula el salario quinenal.
        
        $response['salarioQuincenal'] = round($val/2);


        // semanal
        $response['salarioSemanal'] = round($val/4.33);

        // diario
        $response['salarioDiario'] = round($val/26);


        $response['salarioHora'] = round($response['salarioDiario']/8);

        $response['salarioExtra'] = round($response['salarioHora']*1.5);

        return $response;

        
    }
}
