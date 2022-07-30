<?php

use Illuminate\Database\Seeder;
use App\Models\ContactForm3;

class ContactFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ContactForm3::class, 200)->create(); //200個のダミーデータを生成
    }
}