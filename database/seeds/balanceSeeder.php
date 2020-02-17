<?php

use Illuminate\Database\Seeder;
use App\Balance;

class balanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $balances=[
            [
            'descripcion'=>'recibo de Javier',
            'ingreso'=>10000,
            'egreso'=>0,
            'saldo'=>10000
            ], 
            
        ];

        foreach ($balances as $bal)
        { Balance::create (array(
            'descripcion'=>$bal['descripcion'],
            'ingreso'=>$bal['ingreso'],
            'egreso'=>$bal['egreso'],
            'saldo'=>$bal['saldo']
        ));

        }
    }
}
