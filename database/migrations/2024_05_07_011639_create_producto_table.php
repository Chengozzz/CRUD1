<?php
//AGREGAR SOFT DELETE MOVIENDO EL MIGRATE PARA QUE SE AGREGUE LA COLUMNA NECESARIA 
//SQLSTATE[42S22]: Column not found: 1054 Unknown column 'producto.deleted_at' in 'where clause'
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table ->float('precio');
            $table->timestamps();
        //    $table->softDeletes(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto');
    }
};
