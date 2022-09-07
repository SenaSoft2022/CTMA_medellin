<?php

namespace App\Http\Controllers;

use App\Models\Carta;
use App\Models\Juego;
use App\Models\Jugador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

            //Consulta en la base datos para revolver las cartas
            $cartas = DB::select('SELECT id FROM cartas ORDER BY RAND()');

            foreach ($cartas as $item) {
                $id[] = $item->id;
            }

            $entrada = $id;

            $baraja1 = array($entrada[0], $entrada[1], $entrada[2], $entrada[3], $entrada[4], $entrada[5], $entrada[6], $entrada[7]);
            $baraja2 = array($entrada[8], $entrada[9], $entrada[10], $entrada[11], $entrada[12], $entrada[13], $entrada[14], $entrada[15]);
            $baraja3 = array($entrada[16], $entrada[17], $entrada[18], $entrada[19], $entrada[20], $entrada[21], $entrada[22], $entrada[23]);
            $baraja4 = array($entrada[24], $entrada[25], $entrada[26], $entrada[27], $entrada[28], $entrada[29], $entrada[30], $entrada[31]);
            //------- Fin baraja --------//


            //--------  Condiciones de cada jugador y asignacion de cartas  ------//
            if (!empty($jugador1)) {

                for ($i = 0; $i < count($baraja1); $i++) {
                    $id_2 = $baraja1[$i];
                    $baraja_j_1[] = Carta::find($id_2);
                }
                $contar1 = count($baraja_j_1);
                unset($_SESSION['baraja_j_1']);
                $_SESSION['baraja_j_1']= $baraja_j_1;
            }

            if (!empty($jugador2)) {
                for ($i = 0; $i < count($baraja2); $i++) {
                    $id_2 = $baraja2[$i];
                    $baraja_j_2[] = Carta::find($id_2);
                }
                $contar2 = count($baraja_j_2);
                unset($_SESSION['baraja_j_2']);
                $_SESSION['baraja_j_2']= $baraja_j_2;
            }
            if (!empty($jugador3)) {
                for ($i = 0; $i < count($baraja3); $i++) {
                    $id_2 = $baraja3[$i];
                    $baraja_j_3[] = Carta::find($id_2);
                }
                $contar3 = count($baraja_j_3);
                unset($_SESSION['baraja_j_3']);
                $_SESSION['baraja_j_3']= $baraja_j_3;
            }
            if (!empty($jugador4)) {
                for ($i = 0; $i < count($baraja4); $i++) {
                    $id_2 = $baraja4[$i];
                    $baraja_j_4[] = Carta::find($id_2);
                }
                $contar4 = count($baraja_j_4);
                $_SESSION['baraja_j_4']= $baraja_j_4;
            }
            //--------------- Fin condicionales --------//

            return view('juego.index')->with([
                'jugador1' => $jugador1, 'jugador2' => $jugador2, 'jugador3' => $jugador3,
                'baraja1' => $baraja_j_1, 'baraja2' => @$baraja_j_2, 'baraja3' => @$baraja_j_3,
                'contar1' => $contar1, 'contar2' => @$contar2, 'contar3' => @$contar3, 'contar4' => @$contar4
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
        session_start();
        $caracteristica = $request->get('caracteristica');
        $loop = $request->get('loop');
        if($loop ==""){
            if($caracteristica == "internacionales"){

                $j1=array_column($_SESSION['baraja_j_1'],'titulos_inter')[0];
                $j2=array_column($_SESSION['baraja_j_2'],'titulos_inter')[0];
                $j3=array_column($_SESSION['baraja_j_3'],'titulos_inter')[0];
                $j4=@$_SESSION['baraja_j_4'];
                $ganador = max($j1,$j2,$j3);
                if($j1 == $ganador){
                    echo "ganador j1";
                    unset($_SESSION['baraja_j_2'][0]);
                    unset($_SESSION['baraja_j_3'][0]);
                    $baraja1=$_SESSION['baraja_j_1'];
                    $baraja2=$_SESSION['baraja_j_2'];
                    $baraja3=$_SESSION['baraja_j_3'];
                    $contar1 = count($baraja1);
                    $contar2 = count($baraja2);
                    $contar3 = count($baraja3);
                    $loop = 1;
                    return view('juego.index')->with([
                        'baraja1' => $baraja1, 'baraja2' => @$baraja2, 'baraja3' => @$baraja3,
                        'contar1' => $contar1, 'contar2' => @$contar2, 'contar3' => @$contar3,'loop'=>$loop
                    ]);
                    exit;
                }else if($j2 == $ganador){
                    echo "ganador j2";
                    unset($_SESSION['baraja_j_1'][0]);
                    unset($_SESSION['baraja_j_3'][0]);
                    return $_SESSION['baraja_j_1'];
                    return $_SESSION['baraja_j_2'];
                    exit;
                    echo "ganador j2";
                    exit;
                }else if($j3 == $ganador){
                    echo "ganador j3";
                    unset($_SESSION['baraja_j_1'][0]);
                    unset($_SESSION['baraja_j_2'][0]);
                    return $_SESSION['baraja_j_1'];
                    exit;
                }

                return $ganador ;
            }


        }else{
            if($caracteristica == "internacionales"){
                $loop++;
                $j1=array_column($_SESSION['baraja_j_1'],'titulos_inter')[$loop];
                $j2=array_column($_SESSION['baraja_j_2'],'titulos_inter')[$loop];
                $j3=array_column($_SESSION['baraja_j_3'],'titulos_inter')[$loop];
                $j4=@$_SESSION['baraja_j_4'];
                $ganador = max($j1,$j2,$j3);
                if($j1 == $ganador){

                    echo "ganador j1";
                    unset($_SESSION['baraja_j_2'][0]);
                    unset($_SESSION['baraja_j_3'][0]);
                    $baraja1=$_SESSION['baraja_j_1'];
                    $baraja2=$_SESSION['baraja_j_2'];
                    $baraja3=$_SESSION['baraja_j_3'];
                    $contar1 = count($baraja1);
                    $contar2 = count($baraja2);
                    $contar3 = count($baraja3);

                    return view('juego.index')->with([
                        'baraja1' => $baraja1, 'baraja2' => @$baraja2, 'baraja3' => @$baraja3,
                        'contar1' => $contar1, 'contar2' => @$contar2, 'contar3' => @$contar3,'loop'=>$loop
                    ]);
                    exit;
                }else if($j2 == $ganador){
                    echo "ganador j2";
                    unset($_SESSION['baraja_j_1'][0]);
                    unset($_SESSION['baraja_j_3'][0]);
                    return $_SESSION['baraja_j_1'];
                    return $_SESSION['baraja_j_2'];
                    exit;
                    echo "ganador j2";
                    exit;
                }else if($j3 == $ganador){
                    echo "ganador j3";
                    unset($_SESSION['baraja_j_1'][0]);
                    unset($_SESSION['baraja_j_2'][0]);
                    return $_SESSION['baraja_j_1'];
                    exit;
                }

                return $ganador ;
            }

        }






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
        $eliminar = $id->id;
        return $eliminar;
        //unset( $_SESSION['jugador1']);
    }
}
