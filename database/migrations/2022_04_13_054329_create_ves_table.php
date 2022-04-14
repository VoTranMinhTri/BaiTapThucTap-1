<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ves', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('loai_ve_id');
            $table->date('ngay_su_dung');
            $table->string('hinh_anh_ma_qr');
            $table->string('ho_ten');
            $table->string('sdt');
            $table->string('email');
            $table->boolean('trang_thai');
            $table->timestamps();
            $table->foreign('loai_ve_id')->references('id')->on('loai_ves');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ves');
    }
}
