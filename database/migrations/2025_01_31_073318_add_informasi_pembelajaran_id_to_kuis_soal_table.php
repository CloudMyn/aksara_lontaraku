<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kuis_soal', function (Blueprint $table) {
            // Add the new column as a foreign key
            $table->foreignId('informasi_pembelajaran_id')
                ->nullable() // Optional: if you want to allow NULL values
                ->constrained('informasi_pembelajaran')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kuis_soal', function (Blueprint $table) {
            // Drop the foreign key constraint
            $table->dropForeign(['informasi_pembelajaran_id']);

            // Drop the column
            $table->dropColumn('informasi_pembelajaran_id');
        });
    }
};
