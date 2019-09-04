<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Usuario, Pedido};

class PedidoController extends Controller
{
  public function index(Pedido $pedido) {
    return response()->json($pedido->usuarios);
  }

  public function store(Request $request, Pedido $pedido) {
    $usuario = $pedido->usuarios()->create($request->all());

    return response()->json($usuario->toArray(), 200);
  }

  public function show(Pedido $pedido, Usuario $usuario) {
    return $pedido->usuarios()->find($usuario);
  }

  public function update(Request $request, Pedido $pedido, Usuario $usuario) {
    $usuario = $pedido->usuarios()->update($request->all());

    return response()->json($usuario, 200);
  }

  public function delete(Pedido $usuario) {
    $usuario->delete();

    return response('', 204);
  }
}
