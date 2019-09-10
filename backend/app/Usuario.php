<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Usuario extends Authenticatable implements JWTSubject
{
  use \App\Traits\UsesUuid;

  protected $fillable = [
    'nome',
    'email',
    'password'
  ];

  public function getJWTIdentifier(){
    return $this->getKey();
  }

  public function getJWTCustomClaims(){
    return [];
  }
  
  public function setPasswordAttribute($password){
    if (!empty($password)) {
      $this->attributes['password'] = bcrypt($password);
    }
  }

  public function pedidos() {
    return $this->hasMany('App\Pedido', 'usuario_id', 'id');
  }
}
