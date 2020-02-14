<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagosController extends Controller
{
    public function payService(Request $request)
    {
       $request->request->add(['nombre'=>'prueba']);
       servicios::create($request->all());
    }
}
