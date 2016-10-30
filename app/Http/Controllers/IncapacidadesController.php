<?php

namespace WP\Http\Controllers;

use Illuminate\Http\Request;

use WP\Http\Requests;
use Session;
use Redirect;
use WP\Empleado;

class IncapacidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inc = \WP\Incapacidad::paginate(3);
        return view('incapacidades.lista',compact('inc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $emp = Empleado::pluck('nomb','id');
        return view('incapacidades.crear',compact('emp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \WP\Incapacidad::create($request->all());

       Session::flash('message','Incapacidad Ingresada Correctamente');
        return Redirect::to('/incapacidades');
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
        $inc = \WP\Incapacidad::find($id);
        return view ('incapacidades.editar',compact('emp'),['inc'=>$inc]);
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
        $inc = \WP\Incapacidad::find($id);
        $inc -> fill($request->all());
        $inc -> save();

        Session::flash('message','Incapacidad Editado Correctamente');
        return Redirect::to('/incapacidades');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       \WP\Incapacidad::destroy($id);
        Session::flash('message','Incapacidad Eliminado Correctamente');
        return Redirect::to('/incapacidades');
    }
}
