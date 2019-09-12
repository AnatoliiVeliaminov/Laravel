<?php

namespace App\Http\Controllers;

use App\Category;
use App\Productie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::all()->take(7);
        $products = Productie::all()->take(5);
        return view('home', [
            'categories' => $categories,
            'products' => $products
        ]);
    }
}
























