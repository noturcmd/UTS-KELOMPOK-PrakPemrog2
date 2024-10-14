<?php

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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->unsignedBigInteger('kota_asal'); // Menggunakan unsignedBigInteger untuk foreign key
            $table->unsignedBigInteger('kode_kota'); // Menggunakan unsignedBigInteger untuk foreign key
            $table->timestamps();

            // Foreign key relations
            $table->foreign('kota_asal')->references('id')->on('asal_kotas')->onDelete('cascade');
            $table->foreign('kode_kota')->references('id')->on('kode_asal_kotas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
