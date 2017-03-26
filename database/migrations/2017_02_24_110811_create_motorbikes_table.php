<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotorbikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motorbikes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('owner_name');
            $table->string('gender');
            $table->string('motorbike_reg', 13)->unique();
            $table->string('logbook_no');
            $table->date('dop');
            $table->string('phone');
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
        Schema::dropIfExists('motorbikes');
    }
}
