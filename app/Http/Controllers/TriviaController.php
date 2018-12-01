<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trivia;
use App\Pregunta;
use App\Respuesta;
class TriviaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $respuesta=[];

        $trivias=Trivia::join('preguntas','preguntas.idtrivia','=','trivias.id')
                      ->join('respuestas','respuestas.idpregunta','=','preguntas.id')
                      ->select('preguntas.pregunta','respuestas.respuesta','respuestas.correcto')
                      ->get();
        $pregunta_actual=null;
        $key=0;
        $no=1;
        foreach($trivias as $trivia)
        {
            if($trivia->pregunta!=$pregunta_actual)
            {
                $no=0;

                $respuesta[]=["question"=>$trivia->pregunta];
                $respuesta[$key]["correct_answer"]=$trivia->respuesta;
                //array_push($respuesta[$key],["respuesta"=>$trivia->respuesta]);
                $respuesta[$key]["answer".$no]=$trivia->respuesta;
                
                $pregunta_actual=$trivia->pregunta;
                $key_actual=$key;
                $key++;
                $no++;
            }else
            {
                $respuesta[$key_actual]["answer".$no]=$trivia->respuesta;
                $no++;

            }
        }
        return response()->json($respuesta);
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
