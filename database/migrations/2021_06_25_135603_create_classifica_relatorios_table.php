<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassificaRelatoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classifica_relatorio', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_empresa');
            $table->bigInteger('id_relatorio');
            $table->bigInteger('classificacao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classifica_relatorio');
    }
}
