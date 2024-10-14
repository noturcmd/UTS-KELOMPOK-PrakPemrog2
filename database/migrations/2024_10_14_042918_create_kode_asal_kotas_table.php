<?php

// 2024_10_14_031204_create_kode_asal_kotas_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kode_asal_kotas', function (Blueprint $table) {
            $table->id()->unsignedBigInteger()->autoIncrement();
            $table->string('kode_kota');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kode_asal_kotas');
    }
};