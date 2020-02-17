<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inversion extends Model
{
    protected $table = "inversiones";

    protected $fillable=['empresa','acciones','valor_de_accion', 'total'];
}
