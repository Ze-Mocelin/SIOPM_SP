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
        Schema::create('nat_ocor_respostas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nat_ocor_perguntas_id');
            $table->string('content');
            $table->unsignedBigInteger('nat_ocor_respostas_id')->nullable();
            $table->timestamps();

            $table->foreign('nat_ocor_perguntas_id')->references('id')->on('nat_ocor_perguntas')->onDelete('cascade');
            $table->foreign('nat_ocor_respostas_id')->references('id')->on('nat_ocor_respostas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nat_ocor_respostas');
    }
};
