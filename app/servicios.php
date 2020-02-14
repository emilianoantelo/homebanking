<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servicios extends Model
{
    protected $table = "servicios";
    protected $fillable=['nombre de servicio', 'nombre de referencia', 'importe'];
}
