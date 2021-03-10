<?php

namespace App\Http\Controllers\site;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class allController extends Controller
{
    public function home()
    {
       $aboutUs =  AboutUs::all();
        // return $aboutUs;
        return view('site.pages.home',compact('aboutUs'));
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
