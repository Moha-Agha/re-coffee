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

// $factory->define(App\User::class, function (Faker $faker) {
//     return [
//         'name' => $faker->name,
//         'email' => $faker->unique()->safeEmail,
//         'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
//         'remember_token' => str_random(10),
//     ];
// });



$factory->define(App\Drinker::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});

$factory->define(App\Report::class, function (Faker $faker) {
    return [
        'filename' => $faker->url, // string('filename');     
    ];
});

$factory->define(App\Coffee::class, function (Faker $faker) {
    return [
        // 'billed' => $faker->randomElement($array = array ('0','1')), // boolean('billed');
        'price' => $faker->randomElement($array = array ('100','50')), // integer('price');
        'size' => $faker->randomElement($array = array ('single','double')), // enum('size', ['single', 'double']);
        // 'reportId' => App\Report::all()->random()->id, // integer('reportId')->unsigned();
        'drinker_id' => App\Drinker::all()->random()->id, // integer('drinkerId')->unsigned();
    ];
});
        
         