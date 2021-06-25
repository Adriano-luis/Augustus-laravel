<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class classifica_relatorio extends Model
{
    protected $table = 'classifica_relatorio';
    protected $fillable = ['id_empresa','id_relatorio','classificacao'];
    public $timestamps = false;
}
