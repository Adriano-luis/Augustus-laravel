<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $fillable = [
        'post_title',              
        'post_content',
        'guid'
    ];
    public $timestamps = false;
}
