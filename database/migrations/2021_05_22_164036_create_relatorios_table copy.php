<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelatoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relatorios', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('post_author');
            $table->dateTime('post_date');
            $table->dateTime('post_date_gmt');
            $table->longText('post_content');
            $table->text('post_title');
            $table->text('post_excerpt');
            $table->longText('resumo');
            $table->longText('entendendo_a_opostunidade');
            $table->longText('posicoes_nos_tribunais');
            $table->longText('estimativa_de_ganho');
            $table->string('post_name');
            $table->text('to_ping');
            $table->text('pinged');
            $table->dateTime('post_modified');
            $table->dateTime('post_modified_gmt');
            $table->longText('post_content_filtered');
            $table->bigInteger('post_parent');
            $table->string('guid');
            $table->integer('menu_order');
            $table->string('post_type');
            $table->string('post_mime_type');
            $table->string('comment_count');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relatorios');
    }
}
