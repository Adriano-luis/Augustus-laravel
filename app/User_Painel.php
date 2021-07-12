<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Painel extends Model
{
    protected $fillable = [
        'nome',              
        'email',
        'senha',
    ];
    public $timestamps = false;
}
