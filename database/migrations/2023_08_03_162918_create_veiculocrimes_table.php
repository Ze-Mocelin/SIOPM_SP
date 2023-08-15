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
        Schema::create('veiculocrimes', function (Blueprint $table) {
            $table->id();

            $table->string('placa')->nullable();
            $table->string('marca')->nullable();
            $table->string('modelo')->nullable();
            $table->string('cor')->nullable();
            $table->string('chassis')->nullable();
            $table->string('situacao')->nullable();
            $table->unsignedBigInteger('cadastro190_id');
            $table->foreign('cadastro190_id')->references('id')->on('cadastro190s')->onDelete('cascade')->onUpdate('cascade');
            $table->string('status')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('veiculocrimes');
    }
};
