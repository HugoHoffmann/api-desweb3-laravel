<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
  use \App\Traits\UsesUuid;

  protected $fillable = [
    'desconto'
  ];

  public function usuario() {
    return $this->hasMany('App\Usuario');
  }

  public function calcados() {
    return $this->hasMany('App\PedidoCalcado');
  }
}
