<?php

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

    if(!$mhs){
        abort(404);
    }

    return view("detail-mhs", ["anggota" => $mhs]);
});

Route::get('/anggota', function () {

});
