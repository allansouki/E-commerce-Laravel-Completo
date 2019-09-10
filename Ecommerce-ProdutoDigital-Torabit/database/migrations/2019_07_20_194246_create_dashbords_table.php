<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDashbordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dashbords', function (Blueprint $table) {
            
            $table->timestamps();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->bigInteger('cpf');
            $table->bigInteger('contato');
            $table->bigInteger('cep');
            $table->string('endereco');
            $table->bigInteger('numero');
            $table->string('complemento');
            $table->string('cidade');
            $table->string('estado');
            $table->rememberToken();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dashbords');
    }
}
