<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Pedido, Usuario};

class PedidoController extends Controller
{
  public function index(Usuario $usuario) {
    return response()->json($usuario->pedidos);
  }

  public function store(Request $request, Usuario $usuario) {
    $pedido = $usuario->pedidos()->create($request->all());
    return response()->json($usuario->toArray(), 200);
  }

  public function show(Usuario $usuario, Pedido $pedido) {
    return $usuario->calcados()->find($pedido);
  }

  public function update(Request $request, Usuario $usuario, Pedido $pedido) {
    $pedido = $usuario->pedidos()->update($request->all());

    return response()->json($pedido, 200);
  }

  public function delete(Pedido $pedido) {
    $pedido->delete();

    return response('', 204);
  }
}
