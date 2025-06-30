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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('tipe_bangunan');
            $table->integer('luas_bangunan');
            $table->integer('luas_tanah');
            $table->string('lokasi');
            $table->string('judul');
            $table->text('deskripsi');
            $table->decimal('harga', 15, 2);
            $table->string('sertifikat_path')->nullable();
            $table->json('foto_paths');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
