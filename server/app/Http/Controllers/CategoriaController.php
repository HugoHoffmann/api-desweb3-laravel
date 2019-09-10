<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

// @TODO: limitar para apenas usuário admin poder adicionar, alterar ou deletar, mas qualquer um, mesmo não autenticado pode visualizar
class CategoriaController extends Controller
{
  public function index() {
    return Categoria::all();
  }

  public function store(Request $request) {
    $categoria = new Categoria($request->all());
    $categoria->save();

    return response()->json($categoria->toArray(), 200);
  }

  public function show(Categoria $categoria) {
    return response()->json($categoria);
  }

  public function update(Request $request, Categoria $categoria) {
    $categoria->update($request->all());

    return response()->json($categoria, 200);
  }

  public function delete(Categoria $categoria) {
    $categoria->delete();

    return response('', 204);
  }
}
