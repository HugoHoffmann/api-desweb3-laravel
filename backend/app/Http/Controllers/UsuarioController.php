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
    public function store(Request $request)
    {
        $usu = $request->all();
        $usuario = Usuario::create($usu);
  
        return $usuario;
    }
 }