<?php

use Illuminate\Database\Seeder;
use App\Servicio;

class serviciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servicios=[
            [
            'nombre'=>'metrogas',
            'referencia'=> 32019,
            'importe'=>300
            ],
            [
                'nombre'=>'edesur',
                'referencia'=>82019,
                'importe'=>355.22
                ],
            [
                'nombre'=>'cablevision',
                'referencia'=>12020,
                'importe'=>3300
            ],

        ];
        foreach ($servicios as $serv)
        { Servicio::create (array(
            'nombre'=>$serv['nombre'],
            'referencia'=>$serv['referencia'],
            'importe'=>$serv['importe']
        ));

        }
    }
}

