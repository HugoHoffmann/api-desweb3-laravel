<?php

namespace App\Http\Controllers\Auth;

use App\Usuario;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
  use RegistersUsers;


  protected $redirectTo = '/home';


  public function __construct()
  {
      $this->middleware('guest');
  }

  protected function validator(array $data)
  {
      return Validator::make($data, [
          'nome' => ['required', 'string', 'max:255'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:usuarios'],
          'password' => ['required', 'string', 'min:8', 'confirmed'],
      ]);
  }

  protected function create(array $data)
  {
    return Usuario::create([
      'nome' => $data['name'],
      'email' => $data['email'],
      'password' => Hash::make($data['password']),
    ]);
  }
}
