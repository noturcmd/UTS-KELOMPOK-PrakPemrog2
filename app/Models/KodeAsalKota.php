<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KodeAsalKota extends Model
{

    use HasFactory;
    protected $table = 'kode_asal_kotas';
    protected $fillable = ['kode_asal_kota'];

    public function mahasiswas()
    {
        return $this->hasMany(Mahasiswa::class, 'kode_asal_kota', 'kode_asal_kota');
    }
}
