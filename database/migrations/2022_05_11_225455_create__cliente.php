<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCliente extends Migration
{
    
    
     public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->string('cpf', 255);
            $table->string('uf', 255);
            $table->string('cidade', 255);
            $table->string('bairro', 255);
            $table->string('cep', 255);
            $table->string('rua', 255);
            $table->string('endereco', 255);
            $table->string('telefone', 255);
            $table->timestamps();
        });
    }

    

    public function down()
    {
        Schema::dropIfExists('_cliente');
    }
}
