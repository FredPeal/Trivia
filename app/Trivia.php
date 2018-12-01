<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trivia extends Model
{
    //
    protected $table="trivias";
    protected $fillable=["iduser","nombre","descripcion","puntaje"];
    
}
