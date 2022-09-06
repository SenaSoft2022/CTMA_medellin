<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
    use HasFactory;
    public $table = "juegos";
    public $primarykey = "cod_juego";
    public $timestamps =false;
}
