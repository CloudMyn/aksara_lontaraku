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
            ['symbol' => 'ᨀ', 'description' => 'Ka'],
            ['symbol' => 'ᨁ', 'description' => 'Ga'],
            ['symbol' => 'ᨂ', 'description' => 'Nga'],
            // ['symbol' => 'ᨃ', 'description' => 'Ngka'],
            ['symbol' => 'ᨄ', 'description' => 'Pa'],
            ['symbol' => 'ᨅ', 'description' => 'Ba'],
            ['symbol' => 'ᨆ', 'description' => 'Ma'],
            // ['symbol' => 'ᨇ', 'description' => 'Mpa'],
            ['symbol' => 'ᨈ', 'description' => 'Ta'],
            ['symbol' => 'ᨉ', 'description' => 'Da'],
            ['symbol' => 'ᨊ', 'description' => 'Na'],
            // ['symbol' => 'ᨋ', 'description' => 'Nra'],
            ['symbol' => 'ᨌ', 'description' => 'Ca'],
            ['symbol' => 'ᨍ', 'description' => 'Ja'],
            ['symbol' => 'ᨎ', 'description' => 'Nya'],
            // ['symbol' => 'ᨏ', 'description' => 'Nyca'],
            ['symbol' => 'ᨐ', 'description' => 'Ya'],
            ['symbol' => 'ᨑ', 'description' => 'Ra'],
            ['symbol' => 'ᨓ', 'description' => 'Wa'],
            ['symbol' => 'ᨒ', 'description' => 'La'],
            ['symbol' => 'ᨔ', 'description' => 'Sa'],
            ['symbol' => 'ᨕ', 'description' => 'A'],
            ['symbol' => 'ᨖ', 'description' => 'Ha'],
        ];

        $index  = 0;

        foreach ($letters as $letter) {
            \App\Models\AksaraLontara::create([
                'nama_aksara' => $letter['description'],
                'kode_aksara' => $letter['symbol'],
                'jenis' => $letter['jenis'] ?? 'huruf',
                'urutan' => $index++
            ]);
        }

    }
}
