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
        Schema::create('suppliyer', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->integer('id_barang');
            $table->integer('id_barang_masuk');
            $table->integer('id_barang_keluar');
            $table->integer('id_gudang');
            $table->char('nama_suppliyer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliyer');
    }
};
