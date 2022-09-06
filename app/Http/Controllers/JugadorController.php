<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
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
        session_start();


        $contar = Jugador::where('cod_juego',$request->get('cod_juego'))->count();

        $jugador = new Jugador();
        $jugador->cod_juego = $request->get('cod_juego');
        $jugador->nombres = $request->get('nombres');
        $jugador->save();
        $array = array($jugador);

        $_SESSION['jugador1'][$contar] =$jugador;
        //----------------------------------cartas-------------------------------
        $_SESSION['cartasA'] = array('iden'=>'1A','foto'=>"real_madrid",'nombre'=>'real_madrid','titulosI'=>'29','titulosL'=>'35','titulosC'=>'19','pais'=>'españa','liga'=>'la liga');

        return redirect('/juego');
        //return $_SESSION['jugador1'];
        //return $cartasA;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function show(Jugador $jugador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function edit(Jugador $jugador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jugador $jugador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jugador $jugador)
    {
        //
    }
}
