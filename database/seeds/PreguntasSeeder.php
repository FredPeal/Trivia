<?php

use Illuminate\Database\Seeder;
use \App\Pregunta;
class PreguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Pregunta::create(["idtrivia"=>1,"pregunta"=>"Que es HTML?"]);
        Pregunta::create(["idtrivia"=>1,"pregunta"=>"Que es CSS?"]);
        Pregunta::create(["idtrivia"=>1,"pregunta"=>"Cuando se creo le lenguaje de programacion HTML ?"]);
        Pregunta::create(["idtrivia"=>1,"pregunta"=>"Que es Javascript?"]);
        Pregunta::create(["idtrivia"=>1,"pregunta"=>"Que es Node JS"]);
        Pregunta::create(["idtrivia"=>1,"pregunta"=>"Que es Axios"]);
        Pregunta::create(["idtrivia"=>1,"pregunta"=>"Que es HTTP"]);
        Pregunta::create(["idtrivia"=>1,"pregunta"=>"Que es Docker"]);
    }
}
