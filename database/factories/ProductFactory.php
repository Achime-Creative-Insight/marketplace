<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $name = $faker->bs;
    $slug = \Illuminate\Support\Str::slug($name) . '-' . dechex(time());
    $image = $faker->imageUrl();
    $price = rand(20, 150000);
    $is_physical = rand(0,1);
    $user_id = factory(User::class)->create()->id;
    $category_id = factory(Category::class)->create()->id;
    return compact('name', 'slug', 'image', 'price', 'is_physical', 'user_id', 'category_id');
});
