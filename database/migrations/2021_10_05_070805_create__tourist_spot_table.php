<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTouristSpotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_tourist_spot', function (Blueprint $table) {
            $table->id();
            $table->string('Tourist_spot');
            $table->string('description');
            $table->decimal('Expenses',2);
            $table->string('Date_Open');
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
        Schema::dropIfExists('_tourist_spot');
    }
}
