<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    // generate 5 kelas
    $kelas = Kelas::factory()->count(5)->create();

    // generate 50 siswa
    Siswa::factory()->count(50)->create();
}
}
