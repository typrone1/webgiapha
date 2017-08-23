<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoTocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ho_tocs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ma_ho_toc');
            $table->string('ten_ho_toc');
            $table->string('ten_to_ong')->nullable();
            $table->date('gio_to_ong')->nullable();
            $table->string('ten_to_ba')->nullable();
            $table->date('gio_to_ba')->nullable();
            $table->string('ten_truong_ho')->nullable();
            $table->integer('ma_truong_ho')->nullable();
            $table->text('ghi_chu_ho_toc')->nullable();
            $table->string('ten_nguoi_lap')->nullable();
            $table->integer('ma_nguoi_lap')->nullable();
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
        Schema::dropIfExists('ho_tocs');
    }
}
