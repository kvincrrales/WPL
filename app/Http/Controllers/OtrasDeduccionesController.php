<?php

namespace WP\Http\Controllers;

use Illuminate\Http\Request;

use WP\Http\Requests;
use Session;
use Redirect;
use WP\Empleado;

use DB;
use Excel;

class OtrasDeduccionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sum_total = DB::table('otra_deduccions')->sum('montoO');

        $od = \WP\OtraDeduccion::paginate(3);
        return view('otrasDeducciones.lista',compact('od','sum_total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $emp = Empleado::select(DB::raw("CONCAT(nomb,' ',ape1,' ',ape2,' ',numId) AS nomC, id"))->pluck('nomC', 'id');
        return view('otrasDeducciones.crear',compact('emp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \WP\OtraDeduccion::create($request->all());

       Session::flash('message','Vale Registrado Correctamente');
        return Redirect::to('/otrasDeducciones');
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
        $oD = \WP\OtraDeduccion::find($id);
        return view ('otrasDeducciones.editar',compact('emp'),['oD'=>$oD]);
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
        $oD = \WP\OtraDeduccion::find($id);
        $oD -> fill($request->all());
        $oD -> save();

        Session::flash('message','Deducción Editada Correctamente');
        return Redirect::to('/otrasDeducciones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \WP\OtraDeduccion::destroy($id);
        Session::flash('message','Deducción Eliminada Correctamente');
        return Redirect::to('/otrasDeducciones');
    }

    public function downloadExcel($id)
    {
        //$data = \WP\Vacacion::get()->toArray(); --> Toda la lista
        
        $emp_id = \WP\OtraDeduccion::find($id)->toArray();
        return Excel::create('deduccion', function($excel) use ($emp_id) {

            $excel->sheet('solicitudDeduccion', function($sheet) use ($emp_id)
            {
                //$sheet->cell('A2', function($cell){
                    //$cell->setValue('ID');});
                $sheet->fromArray($emp_id);
            });


        })->download('xls');
    }
}
