<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    //
    protected $table="preguntas";
    protected $fillable=["idtrivia","preguntas","multiple_respuesta","image","url_image"];
}
