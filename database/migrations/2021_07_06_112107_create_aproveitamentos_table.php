<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAproveitamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aproveitamentos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('indice');
            $table->text('titulo');
            $table->bigInteger('id_relatorio');
            $table->bigInteger('chance_de_exito');
            $table->longText('descricao');
            $table->longText('vantagens');
            $table->longText('desvantagens');
            $table->longText('risco');
            $table->longText('documentos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aproveitamentos');
    }
}
