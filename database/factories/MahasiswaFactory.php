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
        // Generate nilai untuk asal_kota dan kode_asal_kota
        $asalKotaValue = $this->faker->city();
        $kodeAsalKotaValue = strtoupper($this->faker->lexify('??')); // Misalnya "AB", "CD"

        // Simpan atau ambil data asal_kota
        $asalKota = AsalKota::firstOrCreate(['kota_asal' => $asalKotaValue]);

        // Simpan atau ambil data kode_asal_kota
        $kodeAsalKota = KodeAsalKota::firstOrCreate(['kode_kota' => $kodeAsalKotaValue]);

        return [
            'nama' => $this->faker->name(),
            'kota_asal' => $asalKotaValue,
            'kode_kota' => $kodeAsalKotaValue,
        ];
    }
}
