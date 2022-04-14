<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuKiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('su_kiens', function (Blueprint $table) {
            $table->id();
            $table->string('ten_su_kien');
            $table->string('dia_diem');
            $table->string('hinh_anh');
            $table->date('ngay_bat_dau');
            $table->date('ngay_ket_thuc');
            $table->double('gia');
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
        Schema::dropIfExists('su_kiens');
    }
}
