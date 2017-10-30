<?php

namespace WP\Http\Controllers;

use Illuminate\Http\Request;

class CajasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cajas.crear');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cajas.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function calcularCaja(Request $data){

        $return['total'] = 0;

        $return['difererncia'] = 0;


        $return['total'] =  $data['nNomb2'] + $data['nNomb4'] + $data['nNomb6'] + $data['nNomb8']+ $data['nNomb10'] + $data['nNomb12']+ $data['nNomb14'] + $data['nNomb16']+ $data['nNomb18'] + $data['nNomb20']+ $data['nNomb22'] + $data['nNomb24']+ $data['nNomb28'] + $data['nNomb33']+ $data['nNomb36'] + $data['nNomb39']+ $data['nNomb42'] + $data['nNomb45']+ $data['nNomb48'] + $data['nNomb51']+ $data['nNomb19']+ $data['nNomb23'];
        
       $return['diferencia'] = $data['nNomb29'] - $return['total'];
        
        return $return;
    }
}
