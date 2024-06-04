<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('absensi')) {
            Schema::create('absensi', function (Blueprint $table) {
                $table->id('id_absen');
                $table->date('tanggal');
                $table->foreignId('id_student')->constrained('students')->onDelete('cascade');
                // Gunakan tipe data yang sesuai, misalnya unsignedBigInteger
                $table->Integer('keterangan'); 
                $table->foreign('keterangan')->references('id')->on('daftar_kelas')->onDelete('cascade'); // Menghubungkan ke tabel daftar_kelas
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absensi');
    }
};
