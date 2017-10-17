<?php

namespace WP\Http\Controllers;
use WP\Planilla;
use DB;

use Illuminate\Http\Request;

class CcSsController extends Controller
{
	public function index()
	{
		return view('ccss.crear');
	}

	public function crear(Request $data)
	{
		$return['fechaI'] = $data['nInicio'];
		$return['fechaF'] = $data['nFinal'];

		$consulta = DB::table('planillas')
		->whereBetween('planillas.emp_fSta', [$return['fechaI'], $return['fechaF'] ])
		->select(
			'planillas.emp_id',
			'planillas.emp_ced',
			'planillas.emp_nomb',
			'planillas.emp_sal',
			'planillas.emp_hE',
			'planillas.emp_vac',
			'planillas.emp_he',
			DB::raw('sum(planillas.emp_sal + planillas.emp_hE + planillas.emp_vac) as total'))
		->groupBy('emp_id')
		->get();

		$sumCaja = 0;
		$sumSal = 0;

		foreach ($consulta as $key => $u) {

			$u->emp_sal = round($u->emp_sal * 4.33);
			if(isset($u->emp_sal))
				$sumCaja += $u->emp_sal;

			if(isset($u->total))
				$sumSal += $u->total;
		}
		//return view('ccss.crear',compact('consulta','sumCaja','sumSal'));
		return $consulta;
	}

}
