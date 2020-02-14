<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Balance;
class BalanceController extends Controller
{

    public function index()
    {

		$balance = Balance::orderBy('id','ASC')->get();
		return view('balance')->with('balance' , $balance);

    }

}
?>