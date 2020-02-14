<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inversiones extends Model
{
    protected $fillable=['empresa','acciones','valor de la accion', 'comprobante de accion'];
}
