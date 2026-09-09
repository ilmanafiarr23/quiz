<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataku = [
            ['nama' => 'Teknologi'],
            ['nama' => 'Pendidikan Masa Kini'],
            ['nama' => 'Bisnis'],
            ['nama' => 'Penyakit dalam'],
        ];
        DB::table('kategoris')->insert($dataku);
    }
}
