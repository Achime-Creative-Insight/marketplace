<?php


namespace App\Services;

use App\Models\Category;

class CategoryService
{
    public function listCategories()
    {
        return Category::all();
    }

    public function getTopCategories(int $limit)
    {
        return Category::take($limit)->get();
    }
}
