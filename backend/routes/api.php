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

Route::group([
 
    'middleware' => 'api',
  
 ], function ($router) {
  
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
 });


Route::post('usuarios', 'UsuarioController@store');
Route::get('usuarios', 'UsuarioController@index');