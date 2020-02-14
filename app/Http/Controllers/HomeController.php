<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
//  public function index($vista)
//  {
//     if($vista == 1){
//         return view ("home");
//     }
//     else if ($vista == 2){
//     return view ("balance");
// }
// else if($vista == 3){
//     return view ("pago_servicios");
// } else if($vista == 4){
//     return view ("inversiones");
// }
// else {
//     return "La vista no existe";
// }
// }
public function index()
    {
       return view("home");
    }
//     public function pagar_servicio(Request $request){
//         $service = $request->get("home");
//         $money = $request->get("money");
// }

}
?>
