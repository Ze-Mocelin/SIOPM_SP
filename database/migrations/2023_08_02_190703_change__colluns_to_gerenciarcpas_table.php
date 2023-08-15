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
        Schema::table('gerenciarcpas', function (Blueprint $table) {
            $table->renameColumn('batalhao', 'bpmm_id');
            $table->renameColumn('id_user', 'user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('gerenciarcpas', function (Blueprint $table) {
            //
        });
    }
};
