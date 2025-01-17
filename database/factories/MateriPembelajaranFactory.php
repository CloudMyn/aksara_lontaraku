<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MateriPembelajaran>
 */
class MateriPembelajaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'gambar' => $this->faker->imageUrl(640, 480, 'cats'),
            'judul' => $this->faker->sentence(6),
            'slug' => $this->faker->unique()->slug(),
            'kelas' => "4" . $this->faker->randomElement(['A', 'B', 'C', 'D']),
            'deskripsi' => $this->faker->paragraphs(3, true),
        ];
    }
}
