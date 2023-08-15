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
        Schema::create('nat_ocor_perguntas', function (Blueprint $table) {
            $table->id();
            $table->string('naturezaocorrencia');
            $table->string('prioridade');
            $table->string('tipo');
            $table->string('pergunta');
            $table->longtext('codigo');
            $table->string('status');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nat_ocor_perguntas');
    }
};
