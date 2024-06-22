<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
    */
    public function up()
    {
        Schema::create('tbl_booking', function (Blueprint $table) {
            $table->increments('id_booking');
            $table->unsignedInteger('id_user');
            $table->unsignedInteger('id_jadwal');
            $table->foreign('id_user')->references('id_user')->on('tbl_user');
            $table->foreign('id_jadwal')->references('id_jadwal')->on('tbl_jadwal');
            $table->enum('status_booking', ['Menunggu Konfirmasi Pembayaran', 'Booking Berhasil', 'Booking dibatalkan']);
            $table->integer('booked_by', false, true, 2);
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
        Schema::dropIfExists('tbl_booking');
    }
}
