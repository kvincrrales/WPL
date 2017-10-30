<?php

namespace WP\Http\Controllers;

use Illuminate\Http\Request;
use WP\Http\Controllers\Controller;
use WP\Http\Requests;
use WP\Departamento;
use WP\Puesto;
use Session;
use Redirect;
use DB;
use PDF;

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
            //->where ('estatus','=','Activo')
            ->orderBy('id','desc')
            ->paginate(7);

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

    public function downloadPdf()
    {

        $emp_id = \WP\Empleado::all();
        //$emp_id = DB::select('select * from vacacions where id=' . $id);
        $pdf = PDF::loadview('invoice.listaEmpleados',['emp_id'=>$emp_id]);
        return $pdf->download('listaEmpleados.pdf');
    }

    public function autocomplete(Request $request){

        $term=$request->term;
        $data=DB::table('CostaRica')->where('canton','LIKE','%'.$term.'%')
        ->take(15)
        ->get();

        foreach($data as $key => $v){
            $results[]=['id'=>$v->cod_postal,'value'=>$v->provincia.' '.$v->canton.' '.$v->distrito];
        }
        return response()->json($results);

    }
}
