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
        Schema::create('rehabs', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('pengawas');
            $table->integer('unit_ready');
            $table->integer('unit_bd');
            $table->integer('ritase_harian');
            $table->time('jam_kerja_alat');
            $table->time('standby_time');
            $table->unsignedBigInteger('user_id'); // Relasi ke tabel users
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rehabs');
    }
};
