<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        return Category::with('products')
            ->get();
    }

    public function show(Category $category)
    {
        $category->load('products');

        return $category;
    }

}
