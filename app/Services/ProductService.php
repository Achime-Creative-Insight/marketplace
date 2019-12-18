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
}
