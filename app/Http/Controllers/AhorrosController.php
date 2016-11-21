<?php

namespace WP\Http\Controllers;

use Illuminate\Http\Request;

use WP\Http\Requests;
use Session;
use Redirect;
use WP\Empleado;

use DB;
use Excel;

class AhorrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $montoSemanal = DB::table('ahorros')->sum('montoS');

        $montoActual = DB::table('ahorros')->sum('montoA');

        $aho = \WP\Ahorro::paginate(3);
        return view('ahorros.lista',compact('aho','montoSemanal','montoActual'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $emp = Empleado::pluck('nomb','id');
        return view('ahorros.crear',compact('emp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         \WP\Ahorro::create($request->all());

       Session::flash('message','Ahorro Ingresado Correctamente');
        return Redirect::to('/ahorros');
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
        $aho = \WP\Ahorro::find($id);
        return view ('ahorros.editar',['aho'=>$aho],compact('emp'));
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
        $aho = \WP\Ahorro::find($id);
        $aho -> fill($request->all());
        $aho -> save();

        //dept = ahorros

        Session::flash('message','Ahorro Editado Correctamente');
        return Redirect::to('/ahorros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \WP\Ahorro::destroy($id);
        Session::flash('message','Ahorro Eliminado Correctamente');
        return Redirect::to('/ahorros');
    }

    public function downloadExcel($id)
    {
        //$data = \WP\Vacacion::get()->toArray(); --> Toda la lista
        
        $emp_id = \WP\Ahorro::find($id)->toArray();
        return Excel::create('reporteAhorro', function($excel) use ($emp_id) {

            $excel->sheet('solicitudVacaciones', function($sheet) use ($emp_id)
            {
                //$sheet->cell('A2', function($cell){
                    //$cell->setValue('ID');});
                $sheet->fromArray($emp_id);
            });


        })->download('xls');
    }
}
