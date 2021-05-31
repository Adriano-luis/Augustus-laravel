<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resposta_formulario extends Model
{
    protected $table = 'resposta_formulario';
    protected $fillable = ['id_formulario','id_pergunta','id_resposta'];
    public $timestamps = false;
}
