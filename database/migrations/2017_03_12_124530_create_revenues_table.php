<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRevenuesTable extends Migration
{

    public function up()
    {
        Schema::create('revenues', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('motorbike_id');
            $table->string('amount');
            $table->string('month');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('revenues');
    }
}
