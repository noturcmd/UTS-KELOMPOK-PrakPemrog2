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

    if(!$mhs){
        abort(404);
    }

    return view("datamahasiswa", ["anggota" => $mhs]);
});

Route::get('/datamahasiswa/{id}', function ($id) {
    $mhs  = Mahasiswa::find($id);
    $asalKota  = AsalKota::find($id);
    $kodeAsalKota  = KodeAsalKota::find($id);

    if(!$mhs){
        abort(404);
    }

    return view("detail-mhs", [
        "anggota" => $mhs,
        "asalkota" => $asalKota,
        "kodeasalkota" => $kodeAsalKota
    ]);
});

Route::get('/anggota', function () {

});
