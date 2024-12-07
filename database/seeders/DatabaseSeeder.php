<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        $this->call([]);
    }
}
