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
        if (!Schema::hasTable('students')) {
            Schema::create('students', function (Blueprint $table) {
                $table->id();
                $table->string('nama');
                $table->string('nis');
                $table->string('nisn');
                $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
                $table->enum('status', ['Aktif', 'Non-Aktif']);
                $table->unsignedBigInteger('class_id');
                $table->foreign('class_id')->references('id')->on('class');
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
        Schema::dropIfExists('students');
    }
};
