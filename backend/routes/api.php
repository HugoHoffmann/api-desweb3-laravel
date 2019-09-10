<?php

use Illuminate\Http\Request;

// Autenticação
Route::group([
  'prefix' => 'auth'
], function () {
  Route::post('login', 'AuthController@login');
  Route::post('logout', 'AuthController@logout');
  Route::post('refresh', 'AuthController@refresh');
  Route::post('me', 'AuthController@me');
});

Route::apiResource('usuarios', 'UsuarioController');
Route::apiResource('categorias', 'CategoriaController');

// CalcadoController
Route::get('/categorias/{categoria}/calcados', 'CalcadoController@index');
Route::get('/categorias/{categoria}/calcados/{calcado}', 'CalcadoController@show');
Route::post('/categorias/{categoria}/calcados', 'CalcadoController@store');
Route::patch('/categorias/{categoria}/calcados/{calcado}', 'CalcadoController@update');
Route::delete('/categorias/{categoria}/calcados/{calcado}', 'CalcadoController@delete');

// @TODO: alterar para usar o usuário do token de autenticação
// PedidoController
Route::get('/pedidos', 'PedidoController@index');
Route::get('/pedidos/{pedido}', 'PedidoController@show');
Route::post('/pedidos', 'PedidoController@store');
Route::patch('/pedidos/{pedido}', 'PedidoController@update');
Route::delete('/pedidos/{pedido}', 'PedidoController@delete');

// PedidoCalcadoController
Route::get('/pedidos/{pedido}/calcados', 'PedidoCalcadoController@index');
Route::get('/pedidos/{pedido}/calcados/{calcado}', 'PedidoCalcadoController@show');
Route::post('/pedidos/{pedido}/calcados/', 'PedidoCalcadoController@store');
Route::delete('/pedidos/{pedido}/calcados/{calcado}', 'PedidoCalcadoController@delete');