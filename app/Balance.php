<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    protected $table = "balances";

    protected $fillable = ['descripcion','ingreso','egreso','saldo'];
    
}
