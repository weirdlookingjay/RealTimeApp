<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Likes;
use Faker\Generator as Faker;
use App\User;

$factory->define(App\Model\Likes::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return \App\User::all()->random();
        }
    ];
});
