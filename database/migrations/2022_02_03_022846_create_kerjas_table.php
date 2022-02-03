<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKerjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kerjas', function (Blueprint $table) {
            $table->id();
            $table->String('nama_pg1');
            $table->String('nip_pg1');
            $table->String('pangkat_pg1');
            $table->String('jabatan_pg1');
            $table->String('nama_pg2');
            $table->String('nip_pg2');
            $table->String('pangkat_pg2');
            $table->String('jabatan_pg2');
            $table->String('nama_pg3');
            $table->String('nip_pg3');
            $table->String('pangkat_pg3');
            $table->String('jabatan_pg3');
            $table->String('nama_pg4');
            $table->String('nip_pg4');
            $table->String('pangkat_pg4');
            $table->String('jabatan_pg4');
            $table->String('nama_pg5');
            $table->String('nip_pg5');
            $table->String('pangkat_pg5');
            $table->String('jabatan_pg5');
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
        Schema::dropIfExists('kerjas');
    }
}
