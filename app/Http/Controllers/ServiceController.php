<?php

namespace App\Http\Controllers;
use App\servicios;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
       return view("pagoservicios");
    }
}
