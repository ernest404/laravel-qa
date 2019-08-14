<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Question::class, function (Faker $faker) {
    return [
       'title' =>rtrim($faker->sentence(rand(5,10)),"."),
       'body'=>$faker->paragraphs(rand(3,7),true),//true converts paragraph to string from array and is separated by new lines
       'views'=>rand(0,10),
       'answers'=>rand(0,10),
       'votes'=>rand(-3,10)
    ];
});
