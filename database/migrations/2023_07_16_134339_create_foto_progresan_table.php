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
        Schema::create('foto_progresan', function (Blueprint $table) {
            $table->id();
            $table->string('id_photo');
            $table->string('foto_progresan');
            $table->date('tanggal_update');
            $table->time('waktu_update');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foto_progresans');
    }
};
