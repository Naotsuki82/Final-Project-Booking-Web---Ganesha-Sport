<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblLapanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_lapangan', function (Blueprint $table) {
            $table->increments('id_lap');
            $table->integer('kode_lap', false, true);
            $table->string('jenis_lap', 20);
            $table->enum('stat_lap', ['1', '0']);
            $table->integer('No_lap', false, true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_lapangan');
    }
}
