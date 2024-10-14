<?php

use App\Models\AsalKota;
use App\Models\KodeAsalKota;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/datamahasiswa', function () {
    $mhs  = Mahasiswa::all();

    if (!$mhs) {
        abort(404);
    }

    return view("datamahasiswa", ["anggota" => $mhs]);
});

Route::get('/datamahasiswa/{id}', function ($id) {
    $mhs  = Mahasiswa::find($id);

    if (!$mhs) {
        abort(404);
    }

    $mhs->load('asalKota', 'kodeAsalKota');

    return view("detail-mhs", [
        "anggota" => $mhs,
        "asalkota" => $mhs->asalKota,
        "kodeasalkota" => $mhs->kodeAsalKota
    ]);
});

Route::get('/anggota', function () {
    return view(
        'anggota',
        [
            "daftaranggota" => [
                [
                    "id" => 1,
                    "nim" => "K3522040",
                    "nama" => "Lintang Mukti Nugroho"
                ],
                [
                    "id" => 2,
                    "nim" => "K3522068",
                    "nama" => "Ridwanul Bakhri"
                ],
                [
                    "id" => 3,
                    "nim" => "K3522078",
                    "nama" => "Septian Dwi Cahyo Nugroho"
                ]
            ]
        ]
    );
});
