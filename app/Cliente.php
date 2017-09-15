<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
	protected $primaryKey = 'idCliente';
    protected $fillable = [
        'primerNombre', 'segundoNombre', 'primerApellido', 'segundoApellido', 'telefono', 'ciPasaporte', 'lugarCi', 'sexo', 'fechaNacimiento', 'nacionalidad', 'foto',
    ];

}
