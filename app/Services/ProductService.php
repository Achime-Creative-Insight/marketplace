<?php


namespace App\Services;


use App\Models\Product;

class ProductService
{
    public function getPopularProducts(int $limit)
    {
        return Product::take($limit)->get();
    }
}
