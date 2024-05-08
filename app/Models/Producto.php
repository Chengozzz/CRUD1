<?php
//AGREGAR SOFT DELETE MOVIENDO EL MIGRATE PARA QUE SE AGREGUE LA COLUMNA NECESARIA 
//SQLSTATE[42S22]: Column not found: 1054 Unknown column 'producto.deleted_at' in 'where clause'

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;
class Producto extends Model
{
    use HasFactory/*, SoftDeletes*/;
    protected $table = 'producto'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'nombre', 'descripcion', 'precio', // Lista de campos que puedes llenar con create() o update()
    ];
}