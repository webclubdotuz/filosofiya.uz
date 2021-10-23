<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\TCG\Voyager\Models\Post::class, function (Faker $faker) {
    return [
        'author_id' => 1,
        'category_id' => rand(1, 3),
        'title' => $faker->sentence(rand(2, 9)),
        'body' => $faker->sentence(rand(15, 115)),
        'slug' => $faker->slug(rand(2,6)),
        'status' => 'PUBLISHED',
        'featured' => 1
    ];
});
