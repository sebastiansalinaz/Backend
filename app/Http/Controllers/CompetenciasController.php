<?php

namespace App\Http\Controllers;

use App\Models\Competencias;
use Illuminate\Http\Request;

class CompetenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Competencias::all();
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data =$request->all();
      $competencia = new Competencias($data);
      $competencia->save();
      return response()->json($competencia);  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Competencias  $competencias
     * @return \Illuminate\Http\Response
     */
    public function show(Competencias $competencias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Competencias  $competencias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Competencias $competencias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Competencias  $competencias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Competencias $competencias)
    {
        //
    }

    
}
