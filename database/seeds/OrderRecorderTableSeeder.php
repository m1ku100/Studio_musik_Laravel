<?php

use Illuminate\Database\Seeder;

class OrderRecorderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\jenis_recorder::class, 2)->create();
    }
}
