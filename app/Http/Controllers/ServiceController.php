<?php

namespace App\Http\Controllers;
use App\Servicio;
use App\Balance;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {

        $servicios= Servicio::all();
       return view("pages/pago_servicios")->with('servicios',$servicios);
    }

    public function pago(Request $request){

        $salario= $this->SALARIO();
        $importe = $request->get('importe');
        $opciones = $request->get('opciones');
        $nuevoBalance = $salario - $importe;


        if ($salario> $importe) {
            $balance = new Balance();
            $balance->descripcion = 'Pagaste con exito '.$opciones;
            $balance->ingreso = 0;
            $balance->egreso = $importe;
            $balance->saldo = $nuevoBalance;
    
            $balance->save();
        } 

        return redirect('pages/balance');

    }
    function SALARIO(){
        $balance= Balance::all();
        $SALARIO= 0;
        foreach ($balance as $item) {
            $SALARIO=$item->saldo; 
        }
    return $SALARIO;
    }


}
