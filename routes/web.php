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

Route::get("/", "HomeController@index");
Route::get("pages/balance", "BalanceController@index");
Route::get("pages/pago_servicios", "ServiceController@index");
Route::get("pages/inversiones", "InvestmentController@index");
Route::get("pages/inversiones/comprar/{id}", "InvestmentController@comprar")->name('inversiones.comprar');
Route::get("pages/inversiones/vender/{id}", "InvestmentController@vender")->name('inversiones.vender');

Route::post('/pages/pago_servicios/pago',[
    'as'=> 'sevicios.pago',
    'uses'=> 'ServiceController@pago'
    ]);
/*
Route::get('pages/inversiones/comprar',[
    'as'=> 'inversiones.comprar',
    'uses'=> 'InvestmentController@comprar'
]);
Route::get('pages/inversiones/vender',[
    'as'=> 'inversiones.vender',
    'uses'=> 'InvestmentController@vender'
]);
*/
?>
