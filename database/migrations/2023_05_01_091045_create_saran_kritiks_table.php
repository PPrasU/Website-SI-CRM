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
        Schema::create('saran_kritiks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pengguna_id');
            $table->string('id_saran', 8);
            $table->text('saran');
            $table->text('kritik');
            $table->timestamps();
        });

        Schema::table('saran_kritiks', function (Blueprint $table) {
            $table->foreign('pengguna_id')->references('id')->on('penggunas')
                  ->onDelete('cascade')->onUpdate('cascade');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saran_kritiks');
    }
};
