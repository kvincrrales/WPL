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
    public function index()
    {
        $sal = \WP\Salario::paginate(3);
        return view('salarios.lista',compact('sal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $variable = DB::table('empleados')->select('id','nomb')->get();

         echo $variable;

        // $id = 2;

        // $nombre = Empleado::find($id);

        // echo $nombre->nomb;

        $emp = Empleado::pluck('nomb','id');
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
            'caja' => $request['caja'],
            'incapacidad' => $request['incapacidad'],
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
}
