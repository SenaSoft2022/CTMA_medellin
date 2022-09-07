<?php

namespace App\Http\Controllers;

use App\Models\Carta;
use App\Models\Juego;
use App\Models\Jugador;
use Illuminate\Http\Request;

class JuegoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session_start();

         //--------------------------Extraemos las cartas y barajamos para iniciar el juego ----------------
        if (isset($_SESSION['jugador1'])) {
            $jugador = $_SESSION['jugador1'];
            $jugador1 = @$jugador[0];
            $jugador2 = @$jugador[1];
            $jugador3 = @$jugador[2];
            $jugador4 = @$jugador[3];

            //cartas a barajar
            if (!empty($jugador1)) {

                $cartas = Carta::all();
                foreach ($cartas as $item) {
                    $id[] = $item->id;
                }

                $entrada = $id;
                //------------------------Aqui se varaja las cartas---------------------------------
                $claves_aleatorias = array_rand($entrada, 4);
                $array =array($entrada[$claves_aleatorias[0]],$entrada[$claves_aleatorias[1]],$entrada[$claves_aleatorias[2]],$entrada[$claves_aleatorias[3]]);

                    for ($i=0; $i < count($array) ; $i++) {
                        $id_2 =$array [$i];
                        $baraja1[] = Carta::find($id_2);
                    }
                    $contar1 = count($baraja1);

            }

            if (!empty($jugador2)) {
                $cartas = Carta::all();
                foreach ($cartas as $item) {
                    $id[] = $item->id;
                }

                $entrada = $id;
                $claves_aleatorias = array_rand($entrada, 4);
                $array =array($entrada[$claves_aleatorias[0]],$entrada[$claves_aleatorias[1]],$entrada[$claves_aleatorias[2]],$entrada[$claves_aleatorias[3]]);

                    for ($i=0; $i < count($array) ; $i++) {
                        $id_2 =$array [$i];
                        $baraja2[] = Carta::find($id_2);
                    }
                    $contar2 = count($baraja2);
            }
            if (!empty($jugador3)) {
                $cartas = Carta::all();
                foreach ($cartas as $item) {
                    $id[] = $item->id;
                }

                $entrada = $id;
                $claves_aleatorias = array_rand($entrada, 4);
                $array =array($entrada[$claves_aleatorias[0]],$entrada[$claves_aleatorias[1]],$entrada[$claves_aleatorias[2]],$entrada[$claves_aleatorias[3]]);

                    for ($i=0; $i < count($array) ; $i++) {
                        $id_2 =$array [$i];
                        $baraja3[] = Carta::find($id_2);
                    }
                    $contar3 = count($baraja3);
            }
            if (!empty($jugador4)) {
                $cartas = Carta::all();
                foreach ($cartas as $item) {
                    $id[] = $item->id;
                }

                $entrada = $id;
                $claves_aleatorias = array_rand($entrada, 4);
                $array =array($entrada[$claves_aleatorias[0]],$entrada[$claves_aleatorias[1]],$entrada[$claves_aleatorias[2]],$entrada[$claves_aleatorias[3]]);

                    for ($i=0; $i < count($array) ; $i++) {
                        $id_2 =$array [$i];
                        $baraja4[] = Carta::find($id_2);
                    }
                    $contar4 = count($baraja4);
            }
           //------------------------------------------------------------------------------------------------

            return view('juego.index')->with([
                'jugador1' => $jugador1, 'jugador2' => $jugador2, 'jugador3' => $jugador3,
                'baraja1' => $baraja1, 'baraja2' => @$baraja2, 'baraja3' => @$baraja3,
                'contar1' =>$contar1, 'contar2' =>@$contar2, 'contar3' =>@$contar3, 'contar4' =>@$contar4
            ]);
        }




        //return $jugador;
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
     * @param  \App\Models\Juego  $juego
     * @return \Illuminate\Http\Response
     */
    public function show(Juego $juego)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Juego  $juego
     * @return \Illuminate\Http\Response
     */
    public function edit(Juego $juego)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Juego  $juego
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Juego $juego)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Juego  $juego
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        session_start();
        $id = $_SESSION['jugador1'][0][0];
        $eliminar =$id->id;
        return $eliminar;
        //unset( $_SESSION['jugador1']);
    }
}

