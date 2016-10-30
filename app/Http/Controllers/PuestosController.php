<?php

namespace WP\Http\Controllers;

use Illuminate\Http\Request;

use WP\Http\Requests;
use WP\Departamento;
use Session;
use Redirect;

class PuestosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $puesto = \WP\Puesto::All();
         return view('puestos.lista',compact('puesto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dept = Departamento::pluck('nombre','id');
        return view('puestos.crear',compact('dept'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \WP\Puesto::create([
            'dept_id' => $request['dep'],
            'nombre' => $request['nomb'],
            'desc' => $request['desc'],
        ]);

       Session::flash('message','Puesto Ingresado Correctamente');
        return Redirect::to('/puestos');
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
        $dept = Departamento::pluck('nombre','id');
        $pue = \WP\Puesto::find($id);
        return view ('puestos.editar',compact('dept'),['pue'=>$pue]);
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
        $pue = \WP\Puesto::find($id);
        $pue -> fill($request->all());
        $pue -> save();

        Session::flash('message','Puesto Editado Correctamente');
        return Redirect::to('/puestos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         \WP\Puesto::destroy($id);
        Session::flash('message','Puesto Eliminado Correctamente');
        return Redirect::to('/puestos');
    }
}
