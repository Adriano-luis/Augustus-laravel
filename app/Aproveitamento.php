<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aproveitamento extends Model
{
    protected $fillable = [
        'titulo',              
        'id_relatorio',
        'chance_de_exito',
        'descricao',
        'vantagens',
        'desvantagens',
        'risco',        
        'documentos'
    ];
    public $timestamps = false;
}