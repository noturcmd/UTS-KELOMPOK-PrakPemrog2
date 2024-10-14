<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KodeAsalKota extends Model
{

    use HasFactory;
    protected $table = 'kode_asal_kotas';
    protected $fillable = ['kode_asal_kota'];

    // Relasi dengan AsalKota
    public function asalKota()
    {
        return $this->belongsTo(AsalKota::class, 'asal_kota', 'asal_kota');
    }

    // Relasi dengan KodeAsalKota
    public function kodeAsalKota()
    {
        return $this->belongsTo(KodeAsalKota::class, 'kode_asal_kota', 'kode_asal_kota');
    }
}
