<?php

namespace App\Http\Controllers;
use App\Inversion;
use App\Balance;
use App\Http\Resources\Inversiones;

use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    public function index()
    {
        $salario = $this->SALARIO();
        $inversiones= Inversion::all();
       return view("pages/inversiones")->with('inversiones', $inversiones, 'salario', $salario);
    }

    public function SALARIO(){
        $balance= Balance::all();
        $SALARIO= 0;
        foreach ($balance as $item) {
            $SALARIO=$item->saldo; 
        }
    return $SALARIO;
    }

    public function comprar($id)
    {
        $salario=$this->SALARIO();
        $inversion=Inversion::find($id);
        $ValorDeAccion=$inversion->valor_de_accion;
        $NombreDeEmpresa=$inversion->empresa;

        
        if ($salario> $ValorDeAccion) {
            $balance = new Balance();
            $balance->descripcion = 'Comrpraste con exito acciones de '.$NombreDeEmpresa;
            $balance->ingreso = 0;
            $balance->egreso = $ValorDeAccion;
            $balance->saldo = $salario-$ValorDeAccion;
        
            $balance->save();
        }
        return redirect('pages/balance');
    }

    public function vender($id)
    {
    $salario=$this->SALARIO();
    $inversion=Inversion::findOrFail($id);
    $ValorDeAccion=$inversion->valor_de_accion;
    $NombreDeEmpresa=$inversion->empresa;
    if ($salario> $ValorDeAccion) {
        $balance = new Balance();
        $balance->descripcion = 'Vendiste con exito acciones de '.$NombreDeEmpresa;
        $balance->ingreso = $ValorDeAccion;
        $balance->egreso = 0;
        $balance->saldo = $salario+$ValorDeAccion;
    
        $balance->save();
    }
    return redirect('pages/balance');

    }
}
