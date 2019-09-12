<?php

namespace App\Http\Controllers;

use App\Category;
use App\Productie;
use App\StatusOrder;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(3);
        return view('categories.index',[
            'categories'=>$categories
        ]);
    }
    public function show(Category $category)
    {
        $products = $category->productie;
        return view('categories.show',[
            'products'=>$products,
            'category'=>$category
            ]);
    }
}

