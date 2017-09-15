<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
	protected $primaryKey = 'idBus';
    protected $fillable = [
        'matricula', 'cantidadAsiento', 'cantidadPiso', 'numeroCarril', 'observacion', 'fotoInterna', 'fotoExterna', 'id_Empresa',
    ];

    
}
