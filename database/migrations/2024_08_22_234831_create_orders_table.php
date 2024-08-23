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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pembeli');
            $table->string('nama_barang');
            $table->string('nama_seller');
            $table->string('alamat');
            $table->integer('ongkos_kirim');
            $table->integer('biaya_admin');
            $table->integer('jumlah_barang');
            $table->string('metode_pembayaran');
            $table->integer('total_pembayaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
