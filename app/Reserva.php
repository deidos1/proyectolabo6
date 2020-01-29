<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $fillable=[
      'fecha_reserva','user_id','id_paquete','id_cliente'
    ];
}
