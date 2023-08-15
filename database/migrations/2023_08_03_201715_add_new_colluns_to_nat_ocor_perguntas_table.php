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
        Schema::table('nat_ocor_perguntas', function (Blueprint $table) {
            $table->string('descricao')->nullable();
            $table->string('texto_auxiliar')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('nat_ocor_perguntas', function (Blueprint $table) {
            $table->dropColumn('descricao');
            $table->dropColumn('texto_auxiliar');

        });
    }
};
