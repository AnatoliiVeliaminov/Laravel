<?php

namespace App\Http\Controllers;

use App\Category;
use App\Productie;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
//        $products = Productie::with('category')->paginate(12);
//        return view('products.index', ['products' => $products]);

//        $categories = Category::all();
        $products = Productie::paginate(5);
        return view('products.index', [
//            'categories' => $categories,
            'products' => $products
        ]);
    }

    public function show(Productie $product)
    {

//        $categories = Category::all();
//        $product->category()->
//        $statusOrder=StatusOrder::where('id', $this->status_id)->get(['name']);
//        $categories = Category::with('productie')->get();
//        $categories = Category::where('productie',$product->id)->pivot->get()

        $categories = $product->category()->get();
        return view('products.show',[
            'categories' => $categories,
            'product'=>$product
        ]);
    }


}
