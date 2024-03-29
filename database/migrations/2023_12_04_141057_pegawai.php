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
        schema::create("pegawai", function (Blueprint $table){
            $table->id("pegawai_id");
            $table->string("pegawai_nama");
            $table->string("pegawai_jabatan");
            $table->string("pegawai_umur");
            $table->string("pegawai_alamat");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawai');
    }
};
