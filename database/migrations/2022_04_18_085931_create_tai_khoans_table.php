<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaiKhoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tai_khoans', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('password');
            $table->foreignId('loai_tai_khoan_id');
            $table->string('ho_ten');
            $table->date('ngay_sinh');
            $table->string('dia_chi');
            $table->string('sdt');
            $table->string('email');
            $table->string('token');
            $table->foreign('loai_tai_khoan_id')->references('id')->on('loai_tai_khoans');
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
        Schema::dropIfExists('tai_khoans');
    }
}
