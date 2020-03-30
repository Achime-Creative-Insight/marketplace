<?php

namespace App\Http\Controllers\Admin;

use App\Services\CategoryService;
use App\Services\SettingsService;
use App\Services\ProductService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * @var ProductService
     */
    private $productService;
    /**
     * @var CategoryService
     */
    private $categoryService;
    /**
     * @var SettingsService
     */
    private $settingsService;

    public function __construct(ProductService $productService, CategoryService $categoryService, SettingsService $settingsService)
    {
        $this->productService = $productService;
        $this->categoryService = $categoryService;
        $this->settingsService = $settingsService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $settings = $this->settingsService->all();
        return view('admin.home', \compact('settings'));
    }
}
