<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    Use Uuids;

    protected $fillable = [
      'nome'
    ];
}
