<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactForm3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_form3s', function (Blueprint $table) {
            $table->bigIncrements('id');
            //氏名、メールアドレス、url,性別、年齢、お問い合わせ内容
            $table->string('your_name', 20);
            $table->string('email', 255);

            //nullable・・・値がnullでもOKにする。
            //null・・値が空の状態
            $table->longText('url')->nullable($value = true);

            
            $table->boolean('gender')->unsigned();
            $table->tinyInteger('age');
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
        Schema::dropIfExists('contact_form3s');
    }
}
