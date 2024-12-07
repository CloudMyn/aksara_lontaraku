<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AksaraLontaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $letters = [
            ['symbol' => 'k', 'description' => 'Ka'],
            ['symbol' => 'g', 'description' => 'Ga'],
            ['symbol' => 'N', 'description' => 'Nga'],
            ['symbol' => 'K', 'description' => 'Ka'],
            ['symbol' => 'p', 'description' => 'Pa'],
            ['symbol' => 'b', 'description' => 'Ba'],
            ['symbol' => 'm', 'description' => 'Ma'],
            ['symbol' => 't', 'description' => 'Ta'],
            ['symbol' => 'P', 'description' => 'Pa'],
            ['symbol' => 'n', 'description' => 'Na'],
            ['symbol' => 'c', 'description' => 'Ca'],
            ['symbol' => 'j', 'description' => 'Ja'],
            ['symbol' => 'Y', 'description' => 'Nya'],
            ['symbol' => 'R', 'description' => 'Ra'],
            ['symbol' => 'y', 'description' => 'Ya'],
            ['symbol' => 'r', 'description' => 'Ra'],
            ['symbol' => 'l', 'description' => 'La'],
            ['symbol' => 'C', 'description' => 'Ca'],
            ['symbol' => 'w', 'description' => 'Wa'],
            ['symbol' => 's', 'description' => 'Sa'],
            ['symbol' => 'a', 'description' => 'A'],
            ['symbol' => 'h', 'description' => 'Ha'],
            ['symbol' => 'i', 'description' => 'I'],
            ['symbol' => 'u', 'description' => 'U'],
            ['symbol' => 'e', 'description' => 'E'],
            ['symbol' => 'o', 'description' => 'O'],
            // ['symbol' => ',', 'description' => ','],
            // ['symbol' => '.', 'description' => '.'],
            // ['symbol' => '(', 'description' => '('],
            // ['symbol' => ')', 'description' => ')']
        ];

        $index  = 0;

        foreach ($letters as $letter) {
            \App\Models\AksaraLontara::create([
                'nama_aksara' => $letter['description'],
                'kode_aksara' => $letter['symbol'],
                'urutan' => $index++
            ]);
        }
    }
}
