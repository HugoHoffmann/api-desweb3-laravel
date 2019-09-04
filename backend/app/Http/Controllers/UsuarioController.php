<?php
 
 namespace App\Http\Controllers;
  
 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Auth;
  
 use App\Usuario;
  
 class UsuarioController extends Controller
 {
    /**
     * Lista de todos os usuários.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $usuarios = Usuario::all();
        return $usuarios;
    }
  
    /**
     * Armazena um novo usuário.
     *
     */
    public function store(Request $request){
        $usu = $request->all();
        $usuario = Usuario::create($usu);
        return $usuario;
    }

    public function show(Usuario $usuario) {
        return response()->json($usuario);
    }
  
    public function update(Request $request, Usuario $usuario) {
        $usuario->update($request->all());
        return response()->json($usuario, 200);
    }
  
    public function delete(Usuario $usuario) {
        $usuario->delete();
    }

 }