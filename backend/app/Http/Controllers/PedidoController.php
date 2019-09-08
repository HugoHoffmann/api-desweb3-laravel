<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Pedido, Usuario};

// @TODO: alterar para usar o usuário autenticado
class PedidoController extends Controller
{
  public function index() {
    return response()->json($usuario->pedidos);
  }

  public function store(Request $request) {
    $pedido = $usuario->pedidos()->create($request->all());
    return response()->json($usuario->toArray(), 200);
  }

  public function show(Pedido $pedido) {
    return $usuario->pedidos()->find($pedido);
  }

  public function update(Request $request, Pedido $pedido) {
    $pedido = $usuario->pedidos()->update($request->all());

    return response()->json($pedido, 200);
  }

  public function delete(Pedido $pedido) {
    $pedido->delete();

    return response('', 204);
  }
}
