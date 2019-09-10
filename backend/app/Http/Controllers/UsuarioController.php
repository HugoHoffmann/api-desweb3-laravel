<?php
 
 namespace App\Http\Controllers;
  
 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Auth;
  
 use App\Usuario;
  
 class UsuarioController extends Controller
 {
  public function index(){
    return Usuario::all();
  }

  public function store(Request $request){
    $usuario = Usuario::create($request->all());

    return response()->json($usuario);
  }

  public function show(Usuario $usuario) {
    return response()->json($usuario);
  }

  public function update(Request $request, Usuario $usuario) {
    if ($usuario == auth()->user()) {
      $usuario->update($request->all());
    }

    return response()->json($usuario, 200);
  }

  public function delete(Usuario $usuario) {
    if ($usuario == auth()->user()) {
      $usuario->delete();
    }

    return response('', 204);
  }
 }