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
        Schema::table('evaluasi', function (Blueprint $table) {
            // Tambahkan kolom video_pembelajaran_id sebagai foreign key
            $table->unsignedBigInteger('video_pembelajaran_id')->nullable()->after('id');

            // Tambahkan foreign key constraint (opsional)
            $table->foreign('video_pembelajaran_id')
                  ->references('id')
                  ->on('video_pembelajaran')
                  ->onDelete('set null'); // Atur aksi jika video dihapus
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('evaluasi', function (Blueprint $table) {
            // Hapus foreign key constraint
            $table->dropForeign(['video_pembelajaran_id']);

            // Hapus kolom video_pembelajaran_id
            $table->dropColumn('video_pembelajaran_id');
        });
    }
};
