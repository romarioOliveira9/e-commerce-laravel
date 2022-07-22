<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordem', function (Blueprint $table) {
            $table->id();
            $table->integer('produto_id');
            $table->integer('usuario_id');
            $table->string('status');
            $table->string('metodo_pagamento');
            $table->string('status_pagamento');
            $table->string('endereco');
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
        Schema::dropIfExists('ordem');
    }
}
