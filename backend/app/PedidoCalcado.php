<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoCalcado extends Model
{
  use \App\Traits\UsesUuid;
  
  protected $table = 'pedidos_calcados';
  protected $fillable = [
    'quantidade'
  ];

  public function calcado() {
    return $this->belongsTo('App\Calcado');
  }
  
  public function pedido() {
    return $this->belongsTo('App\Pedido');
  }
}
