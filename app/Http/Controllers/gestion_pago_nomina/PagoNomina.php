<?php

namespace App\Http\Controllers\gestion_pago_nomina;

use App\Models\PlanPagoContrato;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagoNomina extends Controller
{
 public function getContractos(){
$_PlanPagoContrato = planPagoContrato::with('contrato', 'transaccion')->whereHas('contrato', function ($qContrato){
   // return $qContrato->where('idEstado', '=', 1); para condiciones sencillas
      return $qContrato->whereDate('fechaFinalContrato', '>=', \Carbon\Carbon::now()); //para comparar fechas
})->get();
return response()->json($_PlanPagoContrato);
 }
 public function addPlanPagosContrato(Request $request){
$planPagoContrato = new PlanPagoContrato();
$planPagoContrato->idContrato = $request->input('idContrato');
$planPagoContrato->idTransaccion = $request->input('idTransaccion');
$planPagoContrato->observacion = $request->input('observacion');
$planPagoContrato->save();

return response()->json($planPagoContrato, 201);
 }

 public function deleteContrato($id){
   $planPagoContrato = PlanPagoContrato::find0rFail($id);
   $planPagoContrato->delete();
   return responde()->json([], 204);
}

public function updateContrato(Request $request, $id){
   $planPagoContrato = PlanPagoContrato::find0rFail($id);
   $planPagoContrato->idContrato = $request->input('idContrato');
$planPagoContrato->idTransaccion = $request->input('idTransaccion');
$planPagoContrato->observacion = $request->input('observacion');
$planPagoContrato->save();

return response()->json($planPagoContrato);
}
}