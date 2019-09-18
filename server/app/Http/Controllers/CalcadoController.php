<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Calcado, Categoria};

// @TODO: limitar para apenas usuário admin poder adicionar, alterar ou deletar, mas qualquer um, mesmo não autenticado pode visualizar
class CalcadoController extends Controller
{
  public function index(Categoria $categoria) {
    return response()->json($categoria->calcados);
  }

  public function store(Request $request, Categoria $categoria) {
    $calcado = $categoria->calcados()->create($request->all());

    return response()->json($calcado->toArray(), 200);
  }

  public function show(Categoria $categoria, Calcado $calcado) {
    return $categoria->calcados()->find($calcado->id);
  }

  public function update(Request $request, Categoria $categoria, Calcado $calcado) {
    $calcado = $categoria->calcados()->update($request->all());

    return response()->json($calcado, 200);
  }

  public function destroy(Calcado $calcado) {
    $calcado->delete();

    return response('', 204);
  }
}
