<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Like;
use Faker\Generator as Faker;
use App\Model\User;

$factory->define(App\Model\Like::class, function (Faker $faker) {

    return [

        'user_id'=> function () {
            return User::all()->random();
        }
    ];
});
