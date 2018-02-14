<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Transaction::class, function (Faker $faker) {
    return [
        'source_id' => rand(1,10000),
        'destination_id' => rand(1,10000),
        'amount' => mt_rand(1,10)+number_format(mt_rand(1,100)*.100, 2),
    ];
});
