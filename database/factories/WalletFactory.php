<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Wallet::class, function (Faker $faker) {
    return [
        'hash' => md5(str_random(32)),
        'user_id' => rand(1,1000),
        'coin_id' => rand(1,1000),
    ];
});
