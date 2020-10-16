<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    protected $fillable = [
        'nome', 'marca', 'anno', 'description'
    ];
}
