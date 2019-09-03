<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

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
      return $categoria;
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
