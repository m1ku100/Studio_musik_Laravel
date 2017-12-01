<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\list_time::class, function (Faker $faker) {


    return [
        'waktu' => $faker->unique()->randomElement(['10:00:00','11:00:00','12:00:00','13:00:00','14:00:00',
            '15:00:00','16:00:00','17:00:00','18:00:00','19:00:00','20:00:00','21:00:00','22:00:00'])

    ];
});

$factory->define(App\ListTime2::class, function (Faker $faker) {

$a=10;
    return [


        'waktu' => $a+1,
        'waktu_id' => 1,

    ];
});
