<?php

namespace App\Http\Controllers\site;

use App\Models\AboutUs;
use App\Models\Product;
use App\Models\AboutHome;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;

class allController extends Controller
{
    public function home()
    {
       $aboutUsHomeFirst =  AboutHome::get()->first();
       $aboutUsHomeLast =  AboutHome::get()->last();
       $top_products = Product::with('productImage')->where('top_product',0)->take(5)->get();
       $contactUs = ContactUs::all();
    //    return $contactUs;
        // return Translatable::getLocales();
        return view('site.pages.home',compact('aboutUsHomeFirst','aboutUsHomeLast','top_products','contactUs'));
    }


    public function aboutUs()
    {
       $aboutUs =  AboutUs::all();
        // return $aboutUs;
        return view('site.pages.aboutUs',compact('aboutUs'));
    }

    public function products()
    {
       $aboutUs =  AboutUs::all();
        // return $aboutUs;
        return view('site.pages.products',compact('aboutUs'));
    }

    public function galaries()
    {
       $aboutUs =  AboutUs::all();
        // return $aboutUs;
        return view('site.pages.galaries',compact('aboutUs'));
    }

    public function contactUs()
    {
       $aboutUs =  AboutUs::all();
        // return $aboutUs;
        return view('site.pages.contactUs',compact('aboutUs'));
    }
}
