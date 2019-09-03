<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use \App\Traits\UsesUuid;

    protected $fillable = [
      'nome'
    ];
}
