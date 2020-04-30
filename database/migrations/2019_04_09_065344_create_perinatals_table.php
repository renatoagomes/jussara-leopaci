<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePerinatalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perinatals', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('titulo');
            $table->string('cor_secao_1')->nullable();
            $table->string('titulo_secao_1')->nullable();
            $table->string('subtitulo_secao_1')->nullable();
            $table->longtext('conteudo_secao_1')->nullable();
            $table->string('cor_secao_2')->nullable();
            $table->string('titulo_secao_2')->nullable();
            $table->string('subtitulo_secao_2')->nullable();
            $table->longtext('conteudo_secao_2')->nullable();
            $table->string('cor_secao_3')->nullable();
            $table->string('titulo_secao_3')->nullable();
            $table->string('subtitulo_secao_3')->nullable();
            $table->longtext('conteudo_secao_3')->nullable();
            $table->longtext('referencias_json')->nullable();
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
        Schema::drop('perinatals');
    }
}
