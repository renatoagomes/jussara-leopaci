<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('capa_url')->nullable();
            $table->string('slug')->nullable();
            $table->string('titulo')->nullable();
            $table->string('autor')->nullable();
            $table->datetime('data_publicacao')->nullable();
            $table->longtext('conteudo')->nullable();
            $table->longtext('referencias_json')->nullable();
            $table->integer('status')->default(0);
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
        Schema::drop('posts');
    }
}
