<?php

use Illuminate\Database\Seeder;
use \App\Respuesta;
class RespuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //Pregunta 1 
        Respuesta::create(["idpregunta"=>1,
                           "respuesta"=>"HTML, sigla en inglés de HyperText Markup Language, 
                                        hace referencia al lenguaje de marcado para la elaboración de
                                         páginas web",
                            "correcto"=>1]);
        
        Respuesta::create(["idpregunta"=>1,
                            "respuesta"=>"ES un lenguaje de programacion , creado para leer peticiones enviadas al servidor"]);
        
        Respuesta::create(["idpregunta"=>1,
                            "respuesta"=>
                            "Es el lenguaje de estilos mas usado"
                           ]);

         Respuesta::create(["idpregunta"=>1,
                           "respuesta"=>
                           "Es un lenguaje de programacion de alto nivel usado para el desarrollo de interfacez y sitios webs modernos"
         ]);

         //Pregunta 2
         Respuesta::create(["idpregunta"=>2,
         "respuesta"=>"es un lenguaje de diseño gráfico para definir y 
                        crear la presentación de un documento estructurado
                        escrito en un lenguaje de marcado",
          "correcto"=>1]);

         Respuesta::create(["idpregunta"=>2,
                   "respuesta"=>"es básicamente HTML expresado como XML válido. 
                                Es más estricto a nivel técnico, 
                                pero esto permite que posteriormente sea más fácil 
                                al hacer cambios o buscar errores entre otros
                            "]);
             
         Respuesta::create(["idpregunta"=>2,
                   "respuesta"=>
                   "Es el lenguaje de estilos mas usado"
                  ]);
             
         Respuesta::create(["idpregunta"=>2,
                  "respuesta"=>
                  "Es un lenguaje de programacion de alto nivel usado
                   para el desarrollo de interfacez y sitios webs modernos"
         ]);


         //Pregunta 3

         Respuesta::create(["idpregunta"=>3,
         "respuesta"=>"1980",
          "correcto"=>1]);

         Respuesta::create(["idpregunta"=>3,
                   "respuesta"=>"2000"]);
             
         Respuesta::create(["idpregunta"=>3,
                   "respuesta"=>
                   "2005"
                  ]);
             
         Respuesta::create(["idpregunta"=>3,
                  "respuesta"=>
                  "1930"
         ]);
    }
}
