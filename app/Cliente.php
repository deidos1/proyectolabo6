<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable=[
      'id','nombre','documento_identidad','pais_origen','email','telefono'
    ];
}
