<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use App\Models\Comment;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $this->faker->sentence(3,true),
        'picture' => $this->faker->image('public/storage/images',400,200, null, false),
        'description' =>$this->faker->paragraphs(7,true),
    ];
});
