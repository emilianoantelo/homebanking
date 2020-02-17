<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Balance;
class BalanceController extends Controller
{

    public function index()
    {
    $balance = Balance::orderBy('id','DESC')->get();
            return view('pages/balance')->
            with(
                'balance', $balance
            );
    }

}
?>