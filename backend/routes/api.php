<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('categorias', 'CategoriaController');

// CalcadoController
Route::get('/categorias/{categoria}/calcados', 'CalcadoController@index');
Route::get('/categorias/{categoria}/calcados/{calcado}', 'CalcadoController@show');
Route::post('/categorias/{categoria}/calcados', 'CalcadoController@store');
Route::patch('/categorias/{categoria}/calcados/{calcado}', 'CalcadoController@update');
Route::delete('/categorias/{categoria}/calcados/{calcado}', 'CalcadoController@delete');


// PedidoController
Route::get('/usuarios/{usuario}/pedidos', 'PedidoController@index');
Route::get('/usuarios/{usuario}/pedidos/{pedido}', 'PedidoController@show');
Route::post('/usuarios/{usuario}/pedidos', 'PedidoController@store');
Route::patch('/usuarios/{usuario}/pedidos/{pedido}', 'PedidoController@update');
Route::delete('/usuarios/{usuario}/pedidos/{pedido}', 'PedidoController@delete');

Route::group([
 
    'middleware' => 'api',
  
 ], function ($router) {
  
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
 });


 Route::apiResource('usuarios', 'UsuarioController');