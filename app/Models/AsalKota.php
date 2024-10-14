<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsalKota extends Model
{

    use HasFactory;
    protected $table = 'asal_kotas';
    protected $fillable = ['asal_kota'];

    public function mahasiswas()
    {
        return $this->hasMany(Mahasiswa::class, 'asal_kota', 'asal_kota');
    }
}
