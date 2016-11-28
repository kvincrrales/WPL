<?php

namespace WP\Http\Controllers;

use Illuminate\Http\Request;

use WP\Http\Requests;
use WP\Departamento;
use WP\Puesto;
use Session;
use Redirect;
use DB;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $emp=DB::table('empleados')->where('nomb','LIKE','%'.$query.'%')
            ->where ('id','>','0')
            ->orderBy('id','desc')
            ->paginate(2);
            return view('empleados.lista',["emp"=>$emp,"searchText"=>$query]);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $depart = Departamento::pluck('nombre','id');
        $puesto = Puesto::pluck('nombre','id');
        return view('empleados.crear',compact('depart','puesto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         \WP\Empleado::create($request->all());

        Session::flash('message','Empleado Ingresado Correctamente');
        return Redirect::to('/empleados');
        

        return "Usuario registrado";
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
        $depart = Departamento::pluck('nombre','id');
        $puesto = Puesto::pluck('nombre','id');
        $emp = \WP\Empleado::find($id);
        return view ('empleados.editar',compact('depart','puesto'),['emp'=>$emp]);
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
        $emp = \WP\Empleado::find($id);
        $emp -> fill($request->all());
        $emp -> save();

        Session::flash('message','Empleado Editado Correctamente');
        return Redirect::to('/empleados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \WP\Empleado::destroy($id);
        Session::flash('message','Empleado Eliminado Correctamente');
        return Redirect::to('/empleados');
    }
}
