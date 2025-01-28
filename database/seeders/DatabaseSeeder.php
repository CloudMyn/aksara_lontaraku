<?php

namespace Database\Seeders;

use App\Models\InformasiPembelajaran;
use App\Models\KuisSoal;
use App\Models\MateriPembelajaran;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\VideoPembelajaran;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@mail.io',
            'role' => 'ADMIN',
        ]);

        User::factory()->create([
            'name' => 'dev',
            'username' => 'dev',
            'email' => 'dev@mail.io',
            'role' => 'DEVELOPER',
        ]);

        User::factory()->create([
            'name' => 'guru',
            'username' => 'guru',
            'email' => 'guru@mail.io',
            'role' => 'GURU',
        ]);

        User::factory()->create([
            'name' => 'siswa',
            'username' => 'siswa',
            'email' => 'siswa@mail.io',
            'kelas' => 'IV A',
            'role' => 'USER',
        ]);

        $this->call([
            AksaraLontaraSeeder::class
        ]);

        if (config('app.env') === 'local') {

            $materi_data = MateriPembelajaran::factory(6)->create();

            foreach ($materi_data as $materi) {
                InformasiPembelajaran::factory(10)->create([
                    'materi_pembelajaran_id' => $materi->id
                ]);
            }

            $video_data = VideoPembelajaran::factory(10)->create();

            foreach ($video_data as $video) {
                KuisSoal::factory(rand(4, 10))->create([
                    'video_pembelajaran_id' => $video->id
                ]);
            }
        }
    }
}
