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
            $table->text('untuk');
            $table->text('tujuan_surat');
            $table->text('instansi');
            $table->String('dari');
            $table->String('menuju');
            $table->String('transportasi');
            $table->date('dari_tanggal');
            $table->date('sampai_tanggal');
            $table->integer('biaya_perhari');
            $table->integer('lama_hari');
            $table->integer('total');
            $table->integer('jumlah');
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
        Schema::dropIfExists('surats');
    }
}
