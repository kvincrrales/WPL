<?php

namespace WP\Http\Controllers;

use Illuminate\Http\Request;

use WP\Http\Requests;
use Session;
use Redirect;
use WP\Empleado;

use DB;
use Excel;
use Input;

class IncapacidadesController extends Controller
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
            $incapacidades=DB::table('incapacidads')->where('nomb','LIKE','%'.$query.'%')
            ->where ('id','>','0')
            ->orderBy('id','desc')
            ->paginate(7);
            return view('incapacidades.lista',["incapacidades"=>$incapacidades,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $emp = Empleado::select(DB::raw("CONCAT(nomb,' ',ape1,' ',ape2,' ',numId) AS nomC, id"))->pluck('nomC', 'id');
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
        $emp = Empleado::select(DB::raw("CONCAT(nomb,' ',ape1,' ',ape2,' ',numId) AS nomC, id"))->pluck('nomC', 'id');
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

 public function downloadExcel($id)
 {
        //$data = \WP\Vacacion::get()->toArray(); --> Toda la lista

    $emp_id = \WP\Incapacidad::find($id)->toArray();
    return Excel::create('reporteIncapacidad', function($excel) use ($emp_id) {

        $excel->sheet('registroIncapacidad', function($sheet) use ($emp_id)
        {
            $sheet->cell('A2', function($cell){
                $cell->setValue('ID');});

            $sheet->cells('A1:H1', function($cells) {

                $cells->setFont(array(
                    'family'     => 'Calibri',
                    'size'       => '12',
                    'bold'       =>  false
                    ));

                $cells->setBorder('solid', 'none', 'none', 'solid');

            });

            $sheet->setBorder('A1:H1', 'thin');



            $sheet->fromArray($emp_id);
        });


    })->download('xls');
}

public function calcularIncapacidad(Request $data){

    $response = array();

    $emp_id = DB::table('salarios')
    ->select('salarioD')
    ->where('emp_id',$data['id'])
    ->get();

    $emp_id = $emp_id[0];

    
    if($data['tI']=="C.C.S.S"){
        $response['total'] = $data['nDias'] * $emp_id->salarioD/2;
    } else {
       $response['total'] = 0 ;
   }

   return $response;

}

public function autocomplete(Request $request){

    $term=$request->term;
    $data = Empleado::where('nomb','LIKE','%'.$term.'%')
    ->take(10)
    ->get();

    foreach($data as $key => $v){
        $results[]=['id'=>$v->id,'value'=>$v->nomb.' '.$v->ape1.' '.$v->ape2.' '.$v->numId];
    }
    return response()->json($results);

}
}
