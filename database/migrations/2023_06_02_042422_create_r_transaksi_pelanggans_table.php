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
        Schema::create('r_transaksi_pelanggans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pelanggan_id');
            $table->unsignedBigInteger('jenistransaksi_id');
            $table->unsignedBigInteger('karyawan_id');
            $table->unsignedBigInteger('jasa_id');
            $table->string('id_transaksiP', 10);
            $table->biginteger('berat');
            $table->biginteger('total_bayar');
            $table->biginteger('pembayaran');
            $table->biginteger('kembalian');
            $table->date('date');
            $table->timestamps();
        });

        Schema::table('r_transaksi_pelanggans', function (Blueprint $table) {
            $table->foreign('pelanggan_id')->references('id')->on('pelanggans')
                  ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('jenistransaksi_id')->references('id')->on('jenis_transaksis')
                  ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('karyawan_id')->references('id')->on('karyawans')
                  ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('jasa_id')->references('id')->on('jasas')
                  ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_transaksi_pelanggans');
    }
};
