<?php

use Illuminate\Database\Seeder;

class ListTimeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\list_time::class, 13)->create();
    }
}
