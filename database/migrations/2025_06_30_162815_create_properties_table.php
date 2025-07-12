<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // foreign key ke users
            $table->string('tipe_bangunan');
            $table->float('luas_bangunan');
            $table->float('luas_tanah');
            $table->string('lokasi');
            $table->string('judul');
            $table->text('deskripsi')->nullable();
            $table->bigInteger('harga');
            $table->string('sertifikat_original_name');
            $table->string('sertifikat_generate_name');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
