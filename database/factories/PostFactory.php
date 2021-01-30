<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use App\Models\Comment;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $this->faker->sentence(4,true),
        'picture' => $this->faker->image('public/storage/images',400,300, null, false),
        'description' =>$faker->paragraphs(50,true),
        'comment_id' => factory(Comment::class)->create();
    ];
});
