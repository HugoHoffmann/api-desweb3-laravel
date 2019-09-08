<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calcado extends Model
{
  use \App\Traits\UsesUuid;

  protected $fillable = [
    'nome',
    'preco',
  ];

  public function categoria() {
    return $this->belongsTo('App\Categoria');
  }

  public function pedidos() {
    return $this->belongsToMany('App\PedidoCalcado');
  }
}
