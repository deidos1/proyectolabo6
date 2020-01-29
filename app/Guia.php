<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guia extends Model
{
    protected $fillable=[
      'id','nombre','documento_identidad','genero','direccion','email','id_idioma'
    ];

}
