<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSinhvienMonhocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sinhvien_monhoc', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ho_ten');
            $table->string('lop');
            $table->integer('mon_hoc_id')->unsigned();
            $table->float('diem');
            $table->foreign('mon_hoc_id')->references('id')->on('monhocs')->onDelete('cascade');
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
        Schema::dropIfExists('sinhvien_monhoc');
    }
}
