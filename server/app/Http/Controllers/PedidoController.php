<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Pedido, Usuario};

// @TODO: alterar para usar o usuário autenticado
class PedidoController extends Controller
{
  public function index() {
    return response()->json(auth()->user()->pedidos);
  }

  public function store(Request $request) {
    $pedido = auth()->user()->pedidos()->create($request->all());

    return response()->json(auth()->user()->pedidos, 200);
  }

  public function show(Pedido $pedido) {
    return auth()->user()->pedidos->find($pedido);
  }

  public function update(Request $request, Pedido $pedido) {
    $pedido = auth()->user()->pedidos->find($pedido)->update($request->all());

    return response()->json($pedido, 200);
  }

  public function delete(Pedido $pedido) {
    auth()->user()->pedidos->find($pedido)->delete();

    return response('', 204);
  }
}
