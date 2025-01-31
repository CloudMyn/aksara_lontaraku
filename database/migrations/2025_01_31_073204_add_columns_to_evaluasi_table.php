<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToEvaluasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('evaluasi', function (Blueprint $table) {
            $table->foreignId('informasi_pembelajaran_id')->nullable()->constrained('informasi_pembelajaran')->cascadeOnDelete();
            $table->foreignId('kuis_soal_id')->nullable()->constrained('kuis_soal')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('evaluasi', function (Blueprint $table) {
            $table->dropForeign(['informasi_pembelajaran_id']);
            $table->dropForeign(['kuis_soal_id']);

            $table->dropColumn(['informasi_pembelajaran_id', 'kuis_soal_id']);
        });
    }
}
