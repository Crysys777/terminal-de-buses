<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoBus extends Model
{
	protected $primaryKey = 'idtipoBus';
    protected $fillable = [
       'nombretipoBus', 
    ];
}
