<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajos extends Model
{

protected $dates = [
        'fecha'
    ];


    protected $casts = [
        'fecha' => 'datetime:Y-m-d'
    ];


    public function user()
{
    return $this->belongsTo(User::class);
}
    
    public function reportes()
    {
        return $this->belongsToMany(Reporte::class, 'asignaciones')->withTimestamps();
    }

    public function asignar($reporte)
    {
        $this->reportes()->sync($reporte, false);
    }

    public function tieneReporte()
    {
        return $this->reportes()->flatten()->pluck('descripcion')->unique();
    }
}
