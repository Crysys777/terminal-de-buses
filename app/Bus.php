<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $fillable = [
        'idBus', 'matricula', 'cantidadAsiento', 'cantidadPiso', 'numeroCarril', 'observacion', 'fotoInterna', 'fotoExterna',
    ];

    
}
