<?php


namespace App\Services;


use App\Models\Product;

class ProductService
{
    public function getPopularProducts(int $limit)
    {
        return Product::take($limit)->get();
    }

    public function getUsersProducts(int $userId)
    {
        return Product::where('user_id', $userId)->get();
    }

    public function storeProduct(array $data)
    {
        $data['slug'] = \Illuminate\Support\Str::slug($data['name']) . '-' . dechex(time());
        $data['image'] = "https://lorempixel.com/640/480/?47853";
        return Product::create($data);
    }
}
