<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Coin::class, function (Faker $faker) {
	$name = ucfirst($faker->word) . 'coin';

    return [
        'name' => $name,
        'abbreviation' => strtoupper(substr($name, 0, 3)),
        'user_id' => rand(1,10000),
    ];
});
