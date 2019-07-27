<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/pizzas','PizzaController@index');
Route::post('/add-pizzas','PizzaController@store');
Route::post('/atualizar-pizza/{id}','PizzaController@update');
Route::post('/apagar-pizza/{id}','PizzaController@destroy');

Route::get('/clientes','ClienteController@index');
Route::post('/add-cliente','ClienteController@store');

Route::post('/entrega', "PedidoController@store");