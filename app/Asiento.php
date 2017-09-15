<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asiento extends Model
{
    protected $primaryKey = 'idAsiento';
    protected $fillable = [
       'numeroAsiento', 'id_Cliente', 'id_Bus',
   	];
}
