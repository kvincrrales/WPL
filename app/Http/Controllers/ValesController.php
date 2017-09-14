<?php

namespace WP\Http\Controllers;

use Illuminate\Http\Request;

use WP\Http\Requests;
use Session;
use Redirect;
use WP\Empleado;

use DB;
use Excel;
use PDF;

class ValesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sum_val = DB::table('vales')->sum('total');
        $monto_val = DB::table('vales')->sum('montoV');

        $val = \WP\Vale::paginate(3);
        return view('vales.lista',compact('val','sum_val','monto_val'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $emp = Empleado::select(DB::raw("CONCAT(nomb,' ',ape1,' ',ape2,' ',numId) AS nomC, id"))->pluck('nomC', 'id');
        return view('vales.crear',compact('emp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \WP\Vale::create($request->all());

       Session::flash('message','Vale Registrado Correctamente');
        return Redirect::to('/vales');
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
        $val = \WP\Vale::find($id);
        return view ('vales.editar',compact('emp'),['val'=>$val]);
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
        $val = \WP\Vale::find($id);
        $val -> fill($request->all());
        $val -> save();

        Session::flash('message','Vale Editado Correctamente');
        return Redirect::to('/vales');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \WP\Vale::destroy($id);
        Session::flash('message','Vale Eliminado Correctamente');
        return Redirect::to('/vales');
    }

    public function downloadExcel($id)
    {
        //$data = \WP\Vacacion::get()->toArray(); --> Toda la lista
        
        $emp_id = \WP\Vale::find($id)->toArray();
        return Excel::create('accionVale', function($excel) use ($emp_id) {

            $excel->sheet('vales', function($sheet) use ($emp_id)
            {
                //$sheet->cell('A2', function($cell){
                    //$cell->setValue('ID');});
                $sheet->fromArray($emp_id);
            });


        })->download('xls');
    }

    public function calcularVale(Request $data){

        $return['total'] = 0;


        $return['total'] = $data['nMonto'] + $data['nMonto'] * $data['nInteres'] /100;
        
        return $return;
    }

    public function downloadPdf($id)
    {

        //$emp_id = \WP\Vale::find($id)->toArray();
        $emp_id = DB::select('select * from vales where id=' . $id);
        $pdf = PDF::loadview('vista',['emp_id'=>$emp_id]);
        return $pdf->download('vale.pdf');
    }
}
