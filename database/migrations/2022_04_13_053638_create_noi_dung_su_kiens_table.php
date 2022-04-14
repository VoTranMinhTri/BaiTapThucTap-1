<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoiDungSuKiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noi_dung_su_kiens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('su_kien_id');
            $table->string('noi_dung');
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
        Schema::dropIfExists('noi_dung_su_kiens');
    }
}
