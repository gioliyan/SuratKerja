<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mails', function (Blueprint $table) {
            $table->id();
            $table->string('surat_dari');
            $table->date('tertanggal');
            $table->string('nomor_surat');
            $table->text('perihal');
            $table->text('pembuka');
            $table->text('isi_surat');
            $table->date('tanggal');
            $table->text('tujuan_surat');
            $table->text('pembayaran');
            $table->string('angkutan');
            $table->string('berangkat');
            $table->string('tujuan');
            $table->date('tgl_berangkat');
            $table->date('tgl_kembali');
            $table->string('instansi_ang');
            $table->string('mata_ang');
            $table->text('keterangan');
            $table->string('acuan_konsep');
            $table->string('operator');
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
        Schema::dropIfExists('mails');
    }
}
