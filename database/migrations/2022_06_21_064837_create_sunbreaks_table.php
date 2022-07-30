<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSunbreaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sunbreaks', function (Blueprint $table) {

            
            $table->bigIncrements('id');
            $table->string('title', 30);
            $table->string('buki', 30);
            $table->string('soubi1', 30);
            $table->string('soubi2', 30);
            $table->string('soubi3', 30);
            $table->string('soubi4', 30);
            $table->string('soubi5', 30);
            $table->boolean('gender')->unsigned();
            $table->string('contact', 200);


            





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
        Schema::dropIfExists('sunbreaks');
    }
}
