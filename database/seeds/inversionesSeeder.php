<?php

use Illuminate\Database\Seeder;
use App\Inversion;

class inversionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inversiones=[
            [
            'empresa'=>'ALUAR',
            'acciones'=>500,
            'valor_de_accion'=>30,
            'total'=>1500
            ], 
            [
                'empresa'=>'YPF',
                'acciones'=>300,
                'valor_de_accion'=>776.5,
                'total'=>232950
            ], 
            [
                'empresa'=>'Mercado Libre',
                'acciones'=>150,
                'valor_de_accion'=>283.5,
                'total'=>42525
    
            ],
        ]; 
        foreach ($inversiones as $inv)
        {Inversion::create (array(
            'empresa'=>$inv['empresa'],
            'acciones'=>$inv['acciones'],
            'valor_de_accion'=>$inv['valor_de_accion'],
            'total'=>$inv['total']
        ));

        }
        }
    }