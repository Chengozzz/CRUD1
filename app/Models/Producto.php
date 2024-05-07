<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'producto'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'nombre', '', 'precio', // Lista de campos que puedes llenar con create() o update()
    ];
}
