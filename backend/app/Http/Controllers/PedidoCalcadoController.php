<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Calcado, Pedido, PedidoCalcado, Usuario};
use Illuminate\Support\Str;

class PedidoCalcadoController extends Controller
{
  public function index(Pedido $pedido) {
    return response()->json(PedidoCalcado::where('pedido_id', $pedido->id)->get());
  }

  public function store(Request $request, Pedido $pedido) {
    $calcados = $request->get('calcados');

    foreach ($calcados as $calcado) {
      if (!Calcado::find($calcado['id'])) continue;

      $pedidoCalcado = new PedidoCalcado([
        'quantidade' => $calcado['quantidade'] ?? 1,
      ]);

      $pedidoCalcado->calcado()->associate($calcado['id']);
      $pedidoCalcado->pedido()->associate($pedido);

      $pedidoCalcado->save();
    }

    return response()->json(PedidoCalcado::where('pedido_id', $pedido->id)->get(), 200);
  }

  public function show(Pedido $pedido, Calcado $calcado) {
    return $pedido->calcados()->find(
      PedidoCalcado::where([
        ['pedido_id', $pedido->id],
        ['calcado_id', $calcado->id]
      ])->get());
  }

  // @TODO: fix
  public function delete(Request $request, Pedido $pedido) {
    $calcados = $request->get('calcados-id');

    foreach ($calcados as $calcado) {
      $pedidoCalcado = PedidoCalcado::where([
        ['pedido_id', $pedido->id],
        ['calcado_id', $calcado]
      ])

      $pedidoCalcado->delete();
    }

    return response()->json(PedidoCalcado::where('pedido_id', $pedido->id)->get(), 200);
  }
}
