<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanPagosContrato extends Model
{
    use HasFactory;
    public static $snakeAttributes = false;
    protected $table = "planPagosContrato";
    public $timestamps = false;

    public function contrato(){
        return $this->belongsTo(Contract::class, 'idContrato');
    }
    public function transaccion(){
        return $this->belongsTo(Transaccion::class, 'idTransaccion');
    }
}
