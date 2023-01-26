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
        Schema::create('data_penduduks', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('tempat-lahir');
            $table->string('tanggal-lahir');
            $table->enum('jenis-kelamin', ['Laki-Laki', 'Perempuan']);
            $table->enum('agama', ['Islam', 'Kristen', 'Buddha', 'Hindu', 'Konghucu']);
            $table->string('alamat');
            $table->string('kota');
            $table->string('provinsi');
            $table->enum('pekerjaan', ['Bekerja', 'Belum Bekerja', 'Pelajar/Mahasiswa']);
            $table->enum('kewarganegaraan', ['Indonesia', 'Asing']);
            $table->enum('status-pernikahan', ['Menikah', 'Belum Menikah']);
            $table->string('pengajuan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_penduduks');
    }
};
