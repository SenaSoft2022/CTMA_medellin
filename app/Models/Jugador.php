<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;
    public $table = "jugadores";
    public $primarykey = "id_jugador";
    public $timestamps =false;
}
