<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
  protected $fillable = [
      'id','nombre','hora_salida','hora_llegada','id_guia'
  ];
}
