<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblJadwalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
    */
    public function up()
    {
        Schema::create('tbl_jadwal', function (Blueprint $table) {
            $table->increments('id_jadwal');
            $table->unsignedInteger('id_lap');
            $table->foreign('id_lap')->references('id_lap')->on('tbl_lapangan');
            $table->integer('harga_lap', false, true, 20);
            $table->enum('status_jadwal', ['1', '0']);
            $table->date('tanggal_lapangan');
            $table->time('jam_lapangan');
            $table->timestamp('created_date')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_jadwal');
    }
}
