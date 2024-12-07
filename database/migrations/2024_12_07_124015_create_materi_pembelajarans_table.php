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
        Schema::create('materi_pembelajarans', function (Blueprint $table) {
            $table->id(); // Kolom id
            $table->string('gambar', 255)->nullable(); // Kolom gambar
            $table->string('judul', 255); // Kolom judul
            $table->string('slug', 255)->unique(); // Kolom slug
            $table->string('kelas', 255); // Kolom kelas
            $table->text('deskripsi'); // Kolom deskripsi
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materi_pembelajarans');
    }
};
