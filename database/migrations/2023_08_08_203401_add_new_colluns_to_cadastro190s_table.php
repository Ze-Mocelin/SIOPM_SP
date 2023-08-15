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
        Schema::table('cadastro190s', function (Blueprint $table) {
            $table->unsignedBigInteger('natureza_ocorrencia_id');
            $table->foreign('natureza_ocorrencia_id')->references('id')->on('natureza_ocorrencias')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cadastro190s', function (Blueprint $table) {
            $table->dropColumn('natureza_ocorrencias_id');
        });
    }
};
