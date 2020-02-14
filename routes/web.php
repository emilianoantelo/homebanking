<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

route::get("/", "HomeController@index");
route::get("balance", "BalanceController@index");
route::get("pago_servicios", "ServiceController@index");
route::get("inversiones", "InvestmentController@index");
Route::post("/pagoDeServicios", "PagosController@payService")->name("pago_servicios.pay");


Route::post("/pago_servicios/pay", "HomeController@payService")->name("pago_servicios.pay");

?>
