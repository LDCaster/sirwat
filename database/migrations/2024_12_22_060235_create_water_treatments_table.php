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
        Schema::create('water_treatments', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('lokasi_sp');
            $table->float('ph_awal');
            $table->float('ph_akhir');
            $table->integer('penggunaan_kapur');
            $table->integer('tss_awal');
            $table->integer('tss_akhir');
            $table->integer('penggunaan_tawas');
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
        Schema::dropIfExists('water_treatments');
    }
};
