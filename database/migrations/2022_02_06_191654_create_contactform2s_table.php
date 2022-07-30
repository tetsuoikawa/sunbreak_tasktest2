<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactform2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactform2s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 20);
            $table->longText('url')->nullable($value = true);
            $table->boolean('gender');
            $table->tinyInteger('votes');
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
        Schema::dropIfExists('contactform2s');
    }
}
