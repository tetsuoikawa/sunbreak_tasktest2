<?php

use Illuminate\Database\Seeder;
use App\Models\Sunbreak;

class SunBreakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Sunbreak::class, 200)->create(); //200個のダミーデータを生成
    }
}
