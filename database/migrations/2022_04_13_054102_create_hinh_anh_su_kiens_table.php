<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHinhAnhSuKiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinh_anh_su_kiens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('su_kien_id');
            $table->string('hinh_anh');
            $table->timestamps();
            $table->foreign('su_kien_id')->references('id')->on('su_kiens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hinh_anh_su_kiens');
    }
}
