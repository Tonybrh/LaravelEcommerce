<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->increments("id");
            $table->string("logradouro",100);
            $table->string("numero",100);
            $table->string("estado",100);
            $table->string("cep",100);
            $table->string("complemento",100);
            $table->intenger("usuario_id")->unsigned();
            $table->foreign("usuario_id")->references("id")
                ->on("usuarios")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enderecos');
    }
};
