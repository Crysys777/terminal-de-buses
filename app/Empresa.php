<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
       'idEmpresa', 'nombreEmpresa', 'nitEmpresa', 'numeroAutorizacion', 'fechaFundacion',
    ];
}
