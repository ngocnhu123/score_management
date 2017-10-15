<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonhocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monhocs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nam_hoc_id')->unsigned();
            $table->integer('hoc_ky_id')->unsigned();
            $table->string('ma_mon');
            $table->string('ten_mon');
            $table->string('ten_tep_diem');
            $table->foreign('nam_hoc_id')->references('id')->on('namhocs')->onDelete('cascade');
            $table->foreign('hoc_ky_id')->references('id')->on('hockys')->onDelete('cascade');
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
        Schema::dropIfExists('monhocs');
    }
}
