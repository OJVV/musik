<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $fillable = [
        'titulo',        // h3 de la secció
        'descripcion',   // descripción de la sección
        'imagen',         // ruta a la imagen
        'fecha',          // fecha del evento
        'categoria',      // categoría del evento
    ];
}
