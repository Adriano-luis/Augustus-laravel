<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relatorio extends Model
{
    protected $fillable = [
        'post_title',              
        'post_excerpt',
        'resumo',
        'entendendo_a_opostunidade',
        'posicoes_nos_tribunais',
        'estimativa_de_ganho',
        'forma',        
        'probabilidade',    
        'tributacao'
    ];
    public $timestamps = false;
}
