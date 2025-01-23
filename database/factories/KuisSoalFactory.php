<?php

namespace Database\Factories;

use App\Models\VideoPembelajaran;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KuisSoal>
 */
class KuisSoalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $array = [
            'k', 'g', 'N', 'p', 'b', 'm', 't'
        ];

        $answer_a   =   $this->faker->randomElement($array);
        $answer_b   =   $this->faker->randomElement($array);
        $answer_c   =   $this->faker->randomElement($array);
        $answer_d   =   $this->faker->randomElement($array);

        return [
            'soal' => $this->faker->sentence(),
            'pilihan_a' => $answer_a,
            'pilihan_b' => $answer_b,
            'pilihan_c' => $answer_c,
            'pilihan_d' => $answer_d,
            'jawaban' => $this->faker->randomElement(['a', 'b', 'c', 'd']),
            'video_pembelajaran_id' => VideoPembelajaran::factory()->create()->id,
        ];
    }
}
