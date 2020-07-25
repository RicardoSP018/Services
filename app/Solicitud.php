<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $fillable = ['fecha', 'nombre', 'descripcion'];
}
