<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VideoPembelajaran>
 */
class VideoPembelajaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul' => $this->faker->sentence,
            'gambar' => $this->faker->imageUrl(640, 480, 'cats'),
            'slug' => $this->faker->slug,
            'deskripsi' => $this->faker->sentence,
            'durasi' => rand(3, 8) . ' menit',
            'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/QC8iQqtG0hg?si=4vfD-v0mcoQSeK4t" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>'
        ];
    }
}
