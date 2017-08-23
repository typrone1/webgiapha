<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVCHoSosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_c_ho_sos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_ho_so_vc')->unsigned();
            $table->foreign('id_ho_so_vc')->references('id')->on('ho_sos');
            $table->string('ten_thuong_goi');
            $table->string('ten_hieu');
            $table->string('ho_ten_bo');
            $table->string('ho_ten_me');
            $table->date('ngay_mat_bo');
            $table->date('ngay_mat_me');
            $table->boolean('gioi_tinh');
            $table->integer('con_thu');
            $table->string('so_cmnd');
            $table->string('dan_toc');
            $table->string('tong_iao');
            $table->string('quoc_tich')->default("Việt Nam");
            $table->text('ghi_chu');
            $table->string('nghen_ghiep');
            $table->string('hoc_van');
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
        Schema::dropIfExists('v_c_ho_sos');
    }
}
