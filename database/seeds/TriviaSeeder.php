<?php

use Illuminate\Database\Seeder;
use \App\Trivia;
class TriviaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Trivia::create(["iduser"=>1,"nombre"=>"HTML AND CSS","descripcion"=>"First Test","puntaje"=>50]);
    }
}
