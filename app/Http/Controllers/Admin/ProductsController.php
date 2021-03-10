<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function index()
    {
        // return LaravelLocalization::getCurrentLocale();

        $products = Product::all();
        $categories = Category::all();
        return view('admin.pages.products.index',compact('products','categories '));
    }
}
