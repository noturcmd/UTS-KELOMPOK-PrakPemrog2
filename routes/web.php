<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/datamahasiswa', function () {
    return view('datamahasiswa');
});


