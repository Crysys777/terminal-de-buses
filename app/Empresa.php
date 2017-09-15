<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
	protected $primaryKey = 'idEmpresa';
    protected $fillable = [
       'nombreEmpresa', 'nitEmpresa', 'numeroAutorizacion', 'fechaFundacion',
    ];
}
