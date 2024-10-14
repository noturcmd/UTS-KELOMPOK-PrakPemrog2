<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswas';
    protected $fillable = ['nama', 'kota_asal', 'kode_kota'];

    // Relasi dengan AsalKota
    public function asalKota()
    {
        return $this->belongsTo(AsalKota::class, 'kota_asal');
    }

    // Relasi dengan KodeAsalKota
    public function kodeAsalKota()
    {
        return $this->belongsTo(KodeAsalKota::class, 'kode_kota');
    }
}
