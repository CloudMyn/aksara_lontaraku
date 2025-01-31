<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TandaBacaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $letters = [
            ['symbol' => 'i', 'description' => 'I', 'jenis' => 'tanda_baca'],
            ['symbol' => 'u', 'description' => 'U', 'jenis' => 'tanda_baca'],
            ['symbol' => 'e', 'description' => 'E', 'jenis' => 'tanda_baca'],
            ['symbol' => 'o', 'description' => 'O', 'jenis' => 'tanda_baca'],
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


        $tanda_baca = [
            // KA
            ['symbol' => 'ᨀ',    'description' => 'Ka'],
            ['symbol' => 'ᨀᨗ',  'description' => 'Ki'],
            ['symbol' => 'ᨀᨘ',  'description' => 'Ku'],
            ['symbol' => 'ᨀᨙ',  'description' => 'Ke'],
            ['symbol' => 'ᨀᨚ',  'description' => 'Ko'],

            // GA
            ['symbol' => 'ᨁ',    'description' => 'Ga'],
            ['symbol' => 'ᨁᨗ',  'description' => 'Gi'],
            ['symbol' => 'ᨁᨘ',  'description' => 'Gu'],
            ['symbol' => 'ᨁᨙ',  'description' => 'Ge'],
            ['symbol' => 'ᨁᨚ',  'description' => 'Go'],

            // NGA
            ['symbol' => 'ᨂ',    'description' => 'Nga'],
            ['symbol' => 'ᨂᨗ',  'description' => 'Ngi'],
            ['symbol' => 'ᨂᨘ',  'description' => 'Ngu'],
            ['symbol' => 'ᨂᨙ',  'description' => 'Nge'],
            ['symbol' => 'ᨂᨚ',  'description' => 'Ngo'],

            // NGKA
            // ['symbol' => 'ᨃ',    'description' => 'Ngka'],
            // ['symbol' => 'ᨃᨗ',  'description' => 'Ngki'],
            // ['symbol' => 'ᨃᨘ',  'description' => 'Ngku'],
            // ['symbol' => 'ᨃᨙ',  'description' => 'Ngke'],
            // ['symbol' => 'ᨃᨚ',  'description' => 'Ngko'],

            // PA
            ['symbol' => 'ᨄ',    'description' => 'Pa'],
            ['symbol' => 'ᨄᨗ',  'description' => 'Pi'],
            ['symbol' => 'ᨄᨘ',  'description' => 'Pu'],
            ['symbol' => 'ᨄᨙ',  'description' => 'Pe'],
            ['symbol' => 'ᨄᨚ',  'description' => 'Po'],

            // BA
            ['symbol' => 'ᨅ',    'description' => 'Ba'],
            ['symbol' => 'ᨅᨗ',  'description' => 'Bi'],
            ['symbol' => 'ᨅᨘ',  'description' => 'Bu'],
            ['symbol' => 'ᨅᨙ',  'description' => 'Be'],
            ['symbol' => 'ᨅᨚ',  'description' => 'Bo'],

            // MA
            ['symbol' => 'ᨆ',    'description' => 'Ma'],
            ['symbol' => 'ᨆᨗ',  'description' => 'Mi'],
            ['symbol' => 'ᨆᨘ',  'description' => 'Mu'],
            ['symbol' => 'ᨆᨙ',  'description' => 'Me'],
            ['symbol' => 'ᨆᨚ',  'description' => 'Mo'],

            // MPA
            // ['symbol' => 'ᨇ',    'description' => 'Mpa'],
            // ['symbol' => 'ᨇᨗ',  'description' => 'Mpi'],
            // ['symbol' => 'ᨇᨘ',  'description' => 'Mpu'],
            // ['symbol' => 'ᨇᨙ',  'description' => 'Mpe'],
            // ['symbol' => 'ᨇᨚ',  'description' => 'Mpo'],

            // TA
            ['symbol' => 'ᨈ',    'description' => 'Ta'],
            ['symbol' => 'ᨈᨗ',  'description' => 'Ti'],
            ['symbol' => 'ᨈᨘ',  'description' => 'Tu'],
            ['symbol' => 'ᨈᨙ',  'description' => 'Te'],
            ['symbol' => 'ᨈᨚ',  'description' => 'To'],

            // DA
            ['symbol' => 'ᨉ',    'description' => 'Da'],
            ['symbol' => 'ᨉᨗ',  'description' => 'Di'],
            ['symbol' => 'ᨉᨘ',  'description' => 'Du'],
            ['symbol' => 'ᨉᨙ',  'description' => 'De'],
            ['symbol' => 'ᨉᨚ',  'description' => 'Do'],

            // NA
            ['symbol' => 'ᨊ',    'description' => 'Na'],
            ['symbol' => 'ᨊᨗ',  'description' => 'Ni'],
            ['symbol' => 'ᨊᨘ',  'description' => 'Nu'],
            ['symbol' => 'ᨊᨙ',  'description' => 'Ne'],
            ['symbol' => 'ᨊᨚ',  'description' => 'No'],

            // CA
            ['symbol' => 'ᨌ',    'description' => 'Ca'],
            ['symbol' => 'ᨌᨗ',  'description' => 'Ci'],
            ['symbol' => 'ᨌᨘ',  'description' => 'Cu'],
            ['symbol' => 'ᨌᨙ',  'description' => 'Ce'],
            ['symbol' => 'ᨌᨚ',  'description' => 'Co'],

            // JA
            ['symbol' => 'ᨍ',    'description' => 'Ja'],
            ['symbol' => 'ᨍᨗ',  'description' => 'Ji'],
            ['symbol' => 'ᨍᨘ',  'description' => 'Ju'],
            ['symbol' => 'ᨍᨙ',  'description' => 'Je'],
            ['symbol' => 'ᨍᨚ',  'description' => 'Jo'],

            // NYA
            ['symbol' => 'ᨎ',    'description' => 'Nya'],
            ['symbol' => 'ᨎᨗ',  'description' => 'Nyi'],
            ['symbol' => 'ᨎᨘ',  'description' => 'Nyu'],
            ['symbol' => 'ᨎᨙ',  'description' => 'Nye'],
            ['symbol' => 'ᨎᨚ',  'description' => 'Nyo'],

            // NYCA
            // ['symbol' => 'ᨏ',    'description' => 'Nyca'],
            // ['symbol' => 'ᨏᨗ',  'description' => 'Nyci'],
            // ['symbol' => 'ᨏᨘ',  'description' => 'Nycu'],
            // ['symbol' => 'ᨏᨙ',  'description' => 'Nyce'],
            // ['symbol' => 'ᨏᨚ',  'description' => 'Nyco'],

            // YA
            ['symbol' => 'ᨐ',    'description' => 'Ya'],
            ['symbol' => 'ᨐᨗ',  'description' => 'Yi'],
            ['symbol' => 'ᨐᨘ',  'description' => 'Yu'],
            ['symbol' => 'ᨐᨙ',  'description' => 'Ye'],
            ['symbol' => 'ᨐᨚ',  'description' => 'Yo'],

            // RA
            ['symbol' => 'ᨑ',    'description' => 'Ra'],
            ['symbol' => 'ᨑᨗ',  'description' => 'Ri'],
            ['symbol' => 'ᨑᨘ',  'description' => 'Ru'],
            ['symbol' => 'ᨑᨙ',  'description' => 'Re'],
            ['symbol' => 'ᨑᨚ',  'description' => 'Ro'],

            // LA
            ['symbol' => 'ᨒ',    'description' => 'La'],
            ['symbol' => 'ᨒᨗ',  'description' => 'Li'],
            ['symbol' => 'ᨒᨘ',  'description' => 'Lu'],
            ['symbol' => 'ᨒᨙ',  'description' => 'Le'],
            ['symbol' => 'ᨒᨚ',  'description' => 'Lo'],

            // WA
            ['symbol' => 'ᨓ',    'description' => 'Wa'],
            ['symbol' => 'ᨓᨗ',  'description' => 'Wi'],
            ['symbol' => 'ᨓᨘ',  'description' => 'Wu'],
            ['symbol' => 'ᨓᨙ',  'description' => 'We'],
            ['symbol' => 'ᨓᨚ',  'description' => 'Wo'],

            // SA
            ['symbol' => 'ᨔ',    'description' => 'Sa'],
            ['symbol' => 'ᨔᨗ',  'description' => 'Si'],
            ['symbol' => 'ᨔᨘ',  'description' => 'Su'],
            ['symbol' => 'ᨔᨙ',  'description' => 'Se'],
            ['symbol' => 'ᨔᨚ',  'description' => 'So'],

            // A
            ['symbol' => 'ᨕ',    'description' => 'A'],
            ['symbol' => 'ᨕᨗ',  'description' => 'I'],
            ['symbol' => 'ᨕᨘ',  'description' => 'U'],
            ['symbol' => 'ᨕᨙ',  'description' => 'E'],
            ['symbol' => 'ᨕᨚ',  'description' => 'O'],

            // HA
            ['symbol' => 'ᨖ',    'description' => 'Ha'],
            ['symbol' => 'ᨖᨗ',  'description' => 'Hi'],
            ['symbol' => 'ᨖᨘ',  'description' => 'Hu'],
            ['symbol' => 'ᨖᨙ',  'description' => 'He'],
            ['symbol' => 'ᨖᨚ',  'description' => 'Ho']
        ];

        $index  = 0;
        foreach($tanda_baca as $tanda){
            \App\Models\AksaraLontara::create([
                'nama_aksara' => $tanda['description'],
                'kode_aksara' => $tanda['symbol'],
                'jenis' => 'contoh_tanda_baca',
                'urutan' => $index++
            ]);
        }
    }
}
