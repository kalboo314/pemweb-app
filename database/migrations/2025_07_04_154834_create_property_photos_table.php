<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('property_photos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->constrained()->onDelete('cascade');
            $table->string('original_name');
            $table->string('generated_name')->unique();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('property_photos');
    }
};
