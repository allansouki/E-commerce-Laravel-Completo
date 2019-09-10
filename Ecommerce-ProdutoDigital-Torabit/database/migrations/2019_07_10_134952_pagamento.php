<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pagamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagamento', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('produto');
            $table->string('plano');
            $table->unsignedBigInteger('user_id');
            $table->bigInteger('numeroCartao');
            $table->string('nomeCartao');
            $table->date('dataValidade');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagamento');
    }
}
