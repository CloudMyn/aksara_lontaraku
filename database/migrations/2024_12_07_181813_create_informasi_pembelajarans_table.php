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
        Schema::create('informasi_pembelajaran', function (Blueprint $table) {
            $table->id();
            $table->string('gambar', 255)->nullable(); // Kolom gambar
            $table->string('judul', 255); // Kolom judul
            $table->string('slug', 255)->unique(); // Kolom slug
            $table->foreignId('materi_pembelajaran_id')->constrained('materi_pembelajaran')->cascadeOnDelete();
            $table->text('deskripsi'); // Kolom deskripsi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasi_pembelajarans');
    }
};
