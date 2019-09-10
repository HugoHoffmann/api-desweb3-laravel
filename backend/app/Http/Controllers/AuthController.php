<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
  
class AuthController extends Controller {
  public function login(Request $request){
    $credentials =  $request->only('email', 'password');

    if ($token = auth()->attempt($credentials)) {
      return response()->json(['error' => 'Não autorizado'], 401);
    }

    return $this->respondWithToken($token);
  }

  public function me(){
    return response()->json(auth()->user());
  }

  public function logout(){
    auth()->logout();

    return response()->json(['message' => 'Sucessso ao fazer logout']);
  }

  public function refresh(){
    return $this->respondWithToken(auth()->refresh());
  }

  protected function respondWithToken($token){
    return response()->json([
      'access_token' => $token,
      'token_type' => 'bearer',
      'expires_in' => auth()->factory()->getTTL() * 60
    ]);
  }
}