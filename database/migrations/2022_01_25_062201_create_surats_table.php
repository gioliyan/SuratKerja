<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surats', function (Blueprint $table) {
            $table->id();
            $table->text('dasar');
            $table->unsignedBigInteger('pegawai_id');
            $table->String('nm_pegawai');
            $table->String('nip_pegawai');
            $table->String('pangkat_pegawai');
            $table->String('jabatan_pegawai');
            $table->text('untuk');
            $table->text('tujuan_surat');
            $table->text('instansi');
            $table->String('dari');
            $table->String('menuju');
            $table->String('transportasi');
            $table->date('dari_tanggal');
            $table->date('sampai_tanggal');
            $table->timestamps();

            $table->foreign('pegawai_id')->references('id')->on('pegawais')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surats');
    }
}
