<?php

use App\Models\Curso;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bloques', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_bloque');
            $table->string('carpeta')->nullable();
            $table->foreignIdFor(Curso::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bloques');
    }
}
