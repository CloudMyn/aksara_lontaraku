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
        Schema::create('aksara_lontara', function (Blueprint $table) {
            $table->id();
            $table->string('nama_aksara', 255);
            $table->string('kode_aksara', 10);
            $table->string('bunyi_aksara', 255)->nullable();
            $table->integer('urutan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aksara_lontaras');
    }
};
