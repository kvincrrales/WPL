<?php

namespace WP\Http\Controllers;

use Illuminate\Http\Request;

use WP\Http\Requests;
use Session;
use Redirect;
use WP\Empleado;

use DB;
use Excel;

class PrestamosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sum_prestamo = DB::table('prestamos')->sum('montoP');
        $sum_total = DB::table('prestamos')->sum('total');

        $pre = \WP\Prestamo::paginate(3);
        return view('prestamos.lista',compact('pre','sum_prestamo','sum_total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $emp = Empleado::select(DB::raw("CONCAT(nomb,' ',ape1,' ',ape2,' ',numId) AS nomC, id"))->pluck('nomC', 'id');
        return view('prestamos.crear',compact('emp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \WP\Prestamo::create($request->all());

        Session::flash('message','Prestamo Ingresado Correctamente');
        return Redirect::to('/prestamos');
        

        return "Prestamo registrado";
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
       $emp = Empleado::select(DB::raw("CONCAT(nomb,' ',ape1,' ',ape2,' ',numId) AS nomC, id"))->pluck('nomC', 'id');
        $pres = \WP\Prestamo::find($id);
        return view ('prestamos.editar',compact('emp'),['pres'=>$pres]);
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
        $pres = \WP\Prestamo::find($id);
        $pres -> fill($request->all());
        $pres -> save();

        Session::flash('message','Prestamo Editado Correctamente');
        return Redirect::to('/prestamos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \WP\Prestamo::destroy($id);
        Session::flash('message','Prestamo Eliminado Correctamente');
        return Redirect::to('/prestamos');
    }

    public function downloadExcel($id)
    {
        //$data = \WP\Vacacion::get()->toArray(); --> Toda la lista
        
        $emp_id = \WP\Prestamo::find($id)->toArray();
        return Excel::create('accionPrestamo', function($excel) use ($emp_id) {

            $excel->sheet('solicitudPrestamo', function($sheet) use ($emp_id)
            {
                //$sheet->cell('A2', function($cell){
                    //$cell->setValue('ID');});
                $sheet->fromArray($emp_id);
            });


        })->download('xls');
    }

    public function calcularPrestamo(Request $data){

        $return['total'] = 0;

        $return['total'] = $data['nMonto'] + $data['nMonto'] * $data['nPorcentaje'] /100;
        $return['total'] = $return['total'] / $data['nPlazo'];

        //$return['semanal'] = $return['total'] / $data['nPlazo'];

        return $return;
    }
}
