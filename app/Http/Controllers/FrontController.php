<?php

namespace WP\Http\Controllers;

use Illuminate\Http\Request;

use WP\Http\Requests;

use DB;



class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function modulos()
    {
        return view('modulos');
    }

    public function caja()
    {
        $users = DB::table('empleados')
            ->leftJoin('salarios', 'salarios.emp_id', '=', 'empleados.id')
            ->leftJoin('departamentos', 'departamentos.id', '=', 'empleados.id')
            ->select(
                'empleados.id',
                'empleados.numId', 
                'empleados.nomb',
                'empleados.ape1',
                'empleados.ape2',
                'empleados.nombD',
                'departamentos.nombre', 
                'salarios.salarioM')

            ->get();


        return view('caja',compact('users'));
    }

    public function departamentos()
    {
        return view('dept');
    }

    public function deducciones()
    {
        return view('deducciones');
    }

    public function incapacidades()
    {
        return view('incapacidad');
    }

    public function vacaciones()
    {
        return view('vacaciones');
    }

    public function ahorros()
    {
        return view('ahorros');
    }

    public function aguinaldos()
    {
        return view('aguinaldos');
    }

    public function vDisponibles()
    {
        return view('vacaciones/disponibles');
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
}
