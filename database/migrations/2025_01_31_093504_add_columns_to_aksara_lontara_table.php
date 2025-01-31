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
        Schema::table('aksara_lontara', function (Blueprint $table) {
            $table->enum('jenis', ['huruf', 'tanda_baca', 'contoh_tanda_baca'])->default('huruf');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('aksara_lontara', function (Blueprint $table) {
            $table->dropColumn('jenis');
        });
    }
};
