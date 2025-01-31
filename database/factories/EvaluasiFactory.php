<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evaluasi>
 */
class EvaluasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'score' => $this->faker->numberBetween(0, 100),
            'video_pembelajaran_id' => \App\Models\VideoPembelajaran::inRandomOrder()->first()->id,
            'informasi_pembelajaran_id' => \App\Models\InformasiPembelajaran::inRandomOrder()->first()->id,
            'kuis_soal_id' => \App\Models\KuisSoal::inRandomOrder()->first()->id,
            'user_id' => \App\Models\User::inRandomOrder()->first()->id,
        ];
    }
}
