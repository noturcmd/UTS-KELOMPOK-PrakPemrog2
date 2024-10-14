<?php

namespace Database\Factories;

use App\Models\Mahasiswa;
use App\Models\AsalKota;
use App\Models\KodeAsalKota;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    protected $model = Mahasiswa::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'nama' => $this->faker->name(),
            'kota_asal' => AsalKota::factory(),
            'kode_kota' => KodeAsalKota::factory(),
        ];
    }
}
