<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
class CreateHoSosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ho_sos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_ho_toc')->unsigned();
            $table->foreign('id_ho_toc')->references('id')->on('ho_tocs');
            $table->integer('ma_ho_so')->nullable();
            $table->integer('cap_ho_so')->nullable();
            $table->integer('ma_ho_so_bo_me')->nullable();
            $table->string('ho_ten');
            $table->string('ten_thuong_goi')->nullable();
            $table->date('ngay_sinh')->nullable();
            $table->boolean('gioi_tinh')->nullable();
            $table->integer('con_thu')->nullable();
            $table->integer('loai_con')->nullable();
            $table->string('noi_sinh')->nullable();
            $table->string('dia_chi')->nullable();
            $table->string('so_lien_lac')->nullable();
            $table->string('dan_toc')->nullable();
            $table->string('ton_giao')->nullable();
            $table->string('quoc_tich')->default("Việt Nam");
            $table->boolean('da_mat')->nullable();
            $table->date('ngay_mat_dl')->nullable();
            $table->date('ngay_mat_al')->nullable();
            $table->string('noi_an_tang')->nullable();
            $table->string('ho_ten_vo_chong')->nullable();
            $table->string('ngay_sinh_vo_chong')->nullable();
            $table->string('noi_sinh_vo_chong')->nullable();
            $table->string('dia_chi_vo_chong')->nullable();
            $table->boolean('da_mat_vc')->nullable();
            $table->string('ngay_mat_vc')->nullable();
            $table->string('ngay_mat_dl_vc')->nullable();
            $table->string('so_lien_lac_vc')->nullable();
            $table->boolean('da_ly_di')->nullable();
            $table->string('hinh_anh')->nullable();
            $table->string('hinh_anh_vc')->nullable();
            $table->string('hoc_van')->nullable();
            $table->string('nghe_nghiep')->nullable();
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
        Schema::dropIfExists('ho_sos');
    }
}
