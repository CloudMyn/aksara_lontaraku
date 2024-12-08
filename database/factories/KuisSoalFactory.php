<?php

namespace Database\Factories;

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
            'k', 'g', 'N', 'K', 'p', 'b', 'm', 't', 'P', 'n', 'c', 'j', 'Y', 'R', 'y', 'r', 'l', 'C', 'w', 's', 'a', 'h', 'i', 'u', 'e', 'o'
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
            'jawaban' => $this->faker->randomElement([$answer_a, $answer_b, $answer_c, $answer_d]),
            'nilai' => $this->faker->numberBetween(2, 5),
        ];
    }
}
