<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReferenciaPostsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referencia_posts', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('post_id');
            $table->string('texto');
            $table->string('texto_link');
            $table->string('url');
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
        Schema::drop('referencia_posts');
    }
}
