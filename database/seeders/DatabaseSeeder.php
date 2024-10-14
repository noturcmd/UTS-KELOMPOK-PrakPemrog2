<?php

namespace Database\Seeders;

use App\Models\Mahasiswa; // Panggil model Mahasiswa
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Mahasiswa::factory()->count(10)->create(); // Buat 10 mahasiswa
    }
}

