<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHomepagesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepages', function (Blueprint $table) {
            $table->integer('id', true);
            $table->json('frases_slider')->nullable();
            $table->string('titulo_apresentacao')->nullable();
            $table->string('subtitulo_apresentacao')->nullable();
            $table->text('texto_apresentacao')->nullable();
            $table->json('curriculum_json')->nullable();
            $table->string('link_curriculum')->nullable();
            $table->string('titulo_atuacao')->nullable();
            $table->string('titulo_aba_psic_atuacao')->nullable();
            $table->string('intro_aba_psic_atuacao')->nullable();
            $table->string('texto_aba_psic_atuacao')->nullable();
            $table->string('titulo_aba_social_atuacao')->nullable();
            $table->string('intro_aba_social_atuacao')->nullable();
            $table->string('texto_aba_social_atuacao')->nullable();
            $table->string('titulo_aba_perinatal_atuacao')->nullable();
            $table->string('intro_aba_perinatal_atuacao')->nullable();
            $table->string('texto_aba_perinatal_atuacao')->nullable();
            $table->string('titulo_aba_eventos_atuacao')->nullable();
            $table->string('intro_aba_eventos_atuacao')->nullable();
            $table->string('texto_aba_eventos_atuacao')->nullable();
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
        Schema::drop('homepages');
    }
}
