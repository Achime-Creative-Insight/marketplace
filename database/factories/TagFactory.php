<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tag;
use Faker\Generator as Faker;

$factory->define(Tag::class, function (Faker $faker) {
    $name = $faker->bs;
    $slug = \Illuminate\Support\Str::slug($name) . '-' . dechex(time());
    return compact('name', 'slug');
});
