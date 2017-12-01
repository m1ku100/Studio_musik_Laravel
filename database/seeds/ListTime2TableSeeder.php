<?php

use Illuminate\Database\Seeder;

class ListTime2TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ListTime2::class, 12)->create();
    }
}
