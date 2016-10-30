<?php

namespace WP\Http\Controllers;

use Illuminate\Http\Request;

use WP\Http\Requests;
use Session;
use Redirect;
use WP\Empleado;

class VacacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $vac = \WP\Vacacion::paginate(3);
        return view('vacaciones.lista',compact('vac'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $emp = Empleado::pluck('nomb','id');
        return view('vacaciones.crear',compact('emp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         \WP\Vacacion::create($request->all());

       Session::flash('message','Vacaciones Ingresadas Correctamente');
        return Redirect::to('/vacaciones');
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
        $emp = Empleado::pluck('nomb','id');
        $vac = \WP\Vacacion::find($id);
        return view ('vacaciones.editar',compact('emp'),['vac'=>$vac]);
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
        $vac = \WP\Vacacion::find($id);
        $vac -> fill($request->all());
        $vac -> save();

        Session::flash('message','Vacaciones Editadas Correctamente');
        return Redirect::to('/vacaciones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \WP\Vacacion::destroy($id);
        Session::flash('message','Vacaciones Eliminadas Correctamente');
        return Redirect::to('/vacaciones');
    }
}
