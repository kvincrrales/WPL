<?php

namespace WP\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;
use WP\Http\Requests;
use WP\Empleado;
use DB;

class DepartamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dept = \WP\Departamento::paginate(10);
        return view('departamentos.lista',compact('dept'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departamentos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \WP\Departamento::create([
            'nombre' => $request['nomb'],
            'jefe' => $request['jefe'],
            'tel' => $request['tel'],
            'desc' => $request['desc'],
        ]);

       Session::flash('message','Departamento Ingresado Correctamente');
        return Redirect::to('/departamentos');
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
        $dept = \WP\Departamento::find($id);
        return view ('departamentos.editar',['dept'=>$dept]);
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
        $dept = \WP\Departamento::find($id);
        $dept -> fill($request->all());
        $dept -> save();

        Session::flash('message','Usuario Editado Correctamente');
        return Redirect::to('/departamentos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \WP\Departamento::destroy($id);
        Session::flash('message','Usuario Eliminado Correctamente');
        return Redirect::to('/departamentos');
    }
}
