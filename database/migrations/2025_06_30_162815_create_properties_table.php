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
            $table->text('deskripsi')->nullable();
            $table->decimal('harga', 15, 2);

            // Certificate file information
            $table->string('sertifikat_original_name');
            $table->string('sertifikat_generate_name')->unique();
            


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
