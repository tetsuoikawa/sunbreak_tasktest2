<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            //必要な内容を記述
            $table->string('title', 20);
            $table->string('buki', 50);
            $table->string('soubi-1', 50);
            $table->string('soubi-2', 50);
            $table->string('soubi-3', 50);
            $table->string('soubi-4', 50);
            $table->string('soubi-5', 50);
            $table->string('contact', 255);
            $table->boolean('gender')->unsigned();
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
        Schema::dropIfExists('contact_forms');
    }
}
