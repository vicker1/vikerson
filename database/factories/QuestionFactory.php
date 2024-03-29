<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Question;
use Faker\Generator as Faker;
use App\Model\User;
use App\Model\Category;

$factory->define(App\Model\Question::class, function (Faker $faker) {
    $title = $faker->sentence;
    return [
        'title'=> $title,
        'slug'=> str_slug($title),
        'body'=> $faker->text,
        'category_id' =>function () {
                return Category::all()->random();
        },

        'user_id'=> function () {
            return User::all()->random();
        }
    ];

});
